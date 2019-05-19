<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    public function article()
    {
        $article = Article::all();
        return view('article', compact('article'));
    }
    public function work()
    {
        return view('work');
    }

    public function fashion()
    {
        return view('fashion');
    }

    public function money()
    {
        return view('money');
    }
    public function healthy()
    {
        return view('healthy');
    }
    public function calender()
    {
        $jadwal = User::find(Auth::user()->id);
        return view('calender', compact('jadwal'));
    }
}
