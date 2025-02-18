<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog($id,$book=null)
    {
        $posts = [
            1 => ['title' => 'Laravel'],
            2 => ['title' => 'React']
        ];
        return view('posts.show', ['data' => $posts[$id]]);
    }
}

