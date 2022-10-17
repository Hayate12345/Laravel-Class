<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostModel;

class post extends Controller
{
    public function index()
    {
        $contents = PostModel::all();
        return view('post')
            ->with('contents', $contents);
    }
}
