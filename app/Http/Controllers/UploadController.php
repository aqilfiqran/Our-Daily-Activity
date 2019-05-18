<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;

class UploadController extends Controller
{
    public function index(Request $data)
    {
        $this->validate($data, [
            'singkat_artikel' => 'required',
            'gambar' => 'required',
            'isi_artikel' => 'required'
        ]);

        if ($data->hasFile('gambar')) {
            $fileNameWithExt = $data->file('gambar')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $data->file('gambar')->getClientOriginalExtension();

            $filenameToStore = $filename . '.' . $extension;
            // $path = $data->file('gambar')->storeAs('public/artikel', $filenameToStore);
            $path = $data->file('gambar')->storePubliclyAs('', $filenameToStore, 'public');
        }
        $insert = new Article();
        $insert->user_id = Auth::user()->id;
        $insert->isi_artikel = $data->input('isi_artikel');
        $insert->singkat_artikel = $data->input('singkat_artikel');
        $insert->gambar = $filenameToStore;
        $insert->jadwal = date('Y-m-d');
        $insert->created_at = time();
        $insert->updated_at = time();
        $insert->save();

        return redirect()->route('admin.create');
    }
}
