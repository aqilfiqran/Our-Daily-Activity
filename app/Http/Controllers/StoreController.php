<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Fashion;
use App\Work;
use App\Diet;
use App\Tabungan;


class StoreController extends Controller
{
    public function work(Request $data)
    {
        $this->validate($data, [
            'schedule' => 'required',
            'note' => 'required'
        ]);

        $work = new Work();
        $work->jadwal = strtotime($data->input('schedule'));
        $work->note_work = $data->input('note');
        $work->user_id = Auth::user()->id;
        $work->created_at = time();
        $work->updated_at = time();
        $work->save();
        return redirect()->route('history.work');
    }
    public function fashion(Request $data)
    {
        $this->validate($data, [
            'schedule' => 'required',
            'image' => 'required'
        ]);

        if ($data->hasFile('image')) {
            $fileNameWithExt = $data->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $data->file('image')->getClientOriginalExtension();

            $filenameToStore = $filename . '.' . $extension;
            $path = $data->file('image')->storePubliclyAs('fashion', $filenameToStore, 'public');
        }

        $fashion = new Fashion();
        $fashion->gambar = $filenameToStore;
        $fashion->jadwal = strtotime($data->input('schedule'));
        $fashion->user_id = Auth::user()->id;
        $fashion->created_at = time();
        $fashion->updated_at = time();
        $fashion->save();

        return redirect()->route('history.fashion');
    }

    public function money(Request $data)
    {
        $this->validate($data, [
            'saldo' => 'required',
            'pemasukan' => 'required',
            'pengeluaran' => 'required'
        ]);

        $money = new Tabungan();
        $money->jadwal = time();
        $money->saldo_sekarang = $data->input('saldo');
        $money->pemasukan = $data->input('pemasukan');
        $money->pengeluaran = $data->input('pengeluaran');
        $money->user_id = Auth::user()->id;
        $money->created_at = time();
        $money->updated_at = time();
        $money->save();

        return redirect()->route('history.money');
    }
    public function health(Request $data)
    {
        $this->validate($data, [
            'schedule' => 'required',
            'plan' => 'required'
        ]);

        $health = new Diet();
        $health->jadwal = strtotime($data->input('schedule'));
        $health->eating_plan = $data->input('plan');
        $health->user_id = Auth::user()->id;
        $health->created_at = time();
        $health->updated_at = time();
        $health->save();

        return redirect()->route('history.health');
    }
}
