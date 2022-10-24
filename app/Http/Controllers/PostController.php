<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index()
    {
        $contents = Post::all();
        return view('post')->with('con', $contents);
    }

    // post_id 1 の投稿を取得し、表示する
    public function onePost()
    {
        $id = 2;
        $post = Post::find($id);
        dd($post);
    }
}
