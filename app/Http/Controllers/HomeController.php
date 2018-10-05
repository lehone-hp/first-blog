<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::where('voided', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('home', ['posts' => $posts]);
    }

    public function about() {
        return view('about');
    }

    public function post($id) {
        $post = Post::find($id);
        return view('post', ['post' => $post]);
    }

    public function contact() {
        return view('contact');
    }
}
