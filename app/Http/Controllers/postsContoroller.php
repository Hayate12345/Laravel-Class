<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostModel;

class postsContoroller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $test = PostModel::all();
        dd($test);

    }
}