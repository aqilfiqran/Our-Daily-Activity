<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.user');
    }

    public function post()
    {
        return view('admin.post');
    }
    public function create()
    {
        return view('admin.create');
    }
}
