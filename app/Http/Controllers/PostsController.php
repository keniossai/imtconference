<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::get();
        return view('dashboard.post', compact('posts'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'description'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('posts'),$imageName);


        $post = new Posts;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->description = $request->description;

        // dd($request->all());
        $post->save();

        return back();
    }
}
