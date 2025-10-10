<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        // get all posts and their authors from database
        $posts = Post::with('user')->get();

        return view('home', compact('posts'));
    }

    public function create()
    {   
        if (Auth::user()->can('create', Post::class)) {
            echo 'o usuário pode criar o post';
        } else {
            echo 'o usuário NÃO pode criar o post';
        }
    }

    public function update($id)
    {
        $post = Post::find($id);

        $user = Auth::user();

        // verify if the user is allowed to update the post
        if ($user->can('update', $post)) {
            echo 'o usuário pode atualizar o post';
        } else {
            echo 'o usuário NÃO pode atualizar o post';
        }
    }

    public function delete($id)
    {
        $post = Post::find($id);

        $user = Auth::user();

        // verify if the user is allowed to delete the post
        if ($user->can('delete', $post)) {
            echo 'o usuário pode apagar o post';
        } else {
            echo 'o usuário NÃO pode apagar o post';
        }
    }
}
