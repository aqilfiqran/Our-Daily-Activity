<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class UserController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    public function article()
    {
        $post = Article::all();
        return view('article', compact('post'));
    }
     public function work()
    {
        return view('work');
    }
    public function fashion()
    {
        return view('fashion');
    }
}
