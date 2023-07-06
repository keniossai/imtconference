<?php

namespace App\Http\Controllers;

use App\Models\Speaker;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers  = Speaker::orderByDesc('id')->simplePaginate(16);

        return view('speakers.index', compact('speakers'));
    }


    public function show($id)
    {
        $speaker = Speaker::where('id', $id)->first();
        return view('speakers.show', compact('speaker'));
    }
    // public function show(Speaker $speaker)
    // {
    //     $speaker = Speaker::where('id')->first();
    //     return view('speakers.show', ['speaker', $speaker]);
    // }

}
