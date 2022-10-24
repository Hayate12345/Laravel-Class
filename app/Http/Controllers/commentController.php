<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Comment;

class commentController extends Controller
{
    // post_id 1 に対するコメント表示
    public function index()
    {
        $post_id = 1;
        $post = Post::find($post_id)->comments;
        dd($post);
    }

    // 投稿と投稿に対するコメントを表示する
    public function comment_list()
    {
        // 取得するID
        $post_id = 3;

        // 投稿を取得
        $post = Post::find($post_id);

        // コメントを取得
        $comments = Post::find($post_id)->comments;

        // viewに値を渡す
        return view('comment', compact(
            'post',
            'comments'
        ));
    }
}
