<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->toDateTimeString();
        $posts = Posts::get();

        return view('blog', compact('posts','date'));
    }

    public function single_post($id)
    {
        $post = Posts::where('id', $id)->first();
        return view('single', compact('post'));
    }
    // public function show(Posts $posts)
    // {
    //     return view('single', compact('posts'));
    // }
}
