<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users                   = User::thisYear()->simplePaginate();
        $users_count             = User::whereHas('payments', fn($q)=> $q->paid())->count();
        $transactions_count      = Transaction::has('payments')->count();
        $transactions_sum_amount = Transaction::has('payments')->paid()->sum('amount');
        $speaker_count = Speaker::count();

        //dd(Transaction::has('payments')->pending()->count());
       // dd(Transaction::has('payments')->paid()->count());

        return view('dashboard.index', compact(['users', 'users_count', 'transactions_count', 'transactions_sum_amount', 'speaker_count']));
    }

    public function speakers()
    {
        $speakers = Speaker::get();
        return view('dashboard.speakers', compact('speakers'));
    }
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'organization'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);

//        Upload Image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('speaker'),$imageName);
//        dd($imageName);
        $speaker = new Speaker;
        $speaker->image = $imageName;
        $speaker->title = $request->title;
        $speaker->name = $request->name;
        $speaker->designation = $request->designation;
        $speaker->slug = $request->slug;
        $speaker->gender = $request->gender;
        $speaker->organization = $request->organization;
        $speaker->bio = $request->bio;

        $speaker->save();

        // return Response::api(['message' => 'Speaker created successfully']);
        return back();
    }

    public function show($id)
    {
//        dd($id);
        $speaker = Speaker::where('id', $id)->first();
        return view('admin.speaker.edit', ['speaker' => $speaker]);

    }
    // public function edit($id)
    // {
    //    dd($id);
    //     $speaker = Speaker::where('id', $id)->first();
    //     return view('dashboard.speaker', ['speaker' => $speaker]);

    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'organization'=>'required',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:10000'
        ]);

        $speaker = Speaker::where('id', $id)->first();

        if(isset($request->image)){
//            Image Upload
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('speaker'),$imageName);
            $speaker->image = $imageName;
        }

//        $speaker->title = $request->title;
        $speaker->name = $request->name;
        $speaker->slug = $request->slug;
        $speaker->gender = $request->gender;
        $speaker->organization = $request->organization;
        $speaker->bio = $request->bio;

        $speaker->save();

        return Response::api(['message' => 'Speaker updated successfully']);
    }

    public function destroy($id)
    {
        $speaker = Speaker::where('id', $id)->first();
        $speaker->delete();
        return back();
    }



}
