<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // get all posts and their authors from database
        $posts = Post::with('user')->get();

        return view('home', compact('posts'));
    }
}
