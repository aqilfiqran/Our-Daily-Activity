<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Diet;
use App\Article;
use App\Work;
use App\Fashion;
use App\Tabungan;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('job', 2)->get();
        return view('admin.user', compact('user'));
    }

    public function post()
    {
        $user = User::where('job', 2)->get();
        return view('admin.post', compact('user'));
    }
    public function create()
    {
        return view('admin.create');
    }
    public function edit()
    {
        return view('admin.edit');
    }
    public function destroy($id)
    {
        $user = User::where('id', $id);
        $user->delete();

        return redirect()->route('admin');
    }
}
