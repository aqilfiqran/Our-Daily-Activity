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
        $article = Article::all();
        return view('admin.edit', compact('article'));
    }

    public function update($id)
    {
        $article = Article::find($id);
        return view('admin.update', compact('article'));
    }
    public function delete($id)
    {
        $Article = Article::where('id', $id);
        $Article->delete();
        return redirect()->route('admin.edit');
    }
    public function destroy($id)
    {
        $user = User::destroy($id);

        return redirect()->route('admin');
    }
}
