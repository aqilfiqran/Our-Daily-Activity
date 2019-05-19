<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Fashion;
use App\Work;
use App\Diet;
use App\Tabungan;
use App\User;

class CalenderController extends Controller
{
    public function work()
    {
        $work = Work::where('user_id', Auth::user()->id)->orderBy('jadwal', 'ASC')->get();
        return view('calender_work', compact('work'));
    }

    public function fashion()
    {
        $fashion = Fashion::where('user_id', Auth::user()->id)->orderBy('jadwal', 'ASC')->get();
        return view('calender_fashion', compact('fashion'));
    }

    public function health()
    {
        $health = Diet::where('user_id', Auth::user()->id)->orderBy('jadwal', 'ASC')->get();
        return view('calender_health', compact('health'));
    }

    public function money()
    {
        $money = Tabungan::where('user_id', Auth::user()->id)->orderBy('jadwal', 'ASC')->get();
        return view('calender_money', compact('money'));
    }
}
