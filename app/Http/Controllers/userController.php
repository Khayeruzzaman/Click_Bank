<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Customer;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userDashboard()
    {

        $news =Post::orderby('created_at','desc')->get();
        return view('user.userDashboard')->with('news', $news);;
    }

    public function newsShow(Request $request)
    {

        $news = Post::where('id',$request->id)->first();
        return view('user.news')->with('news', $news);;
    }

    public function showVideo(Request $request)
    {

        $news = Post::where('id',$request->id)->first();
        return view('user.watchVideo')->with('news', $news);;
    }

    public function pointIncrease()
    {

        $user = Customer::where('id',session()->get('userId'))->first();
        $user->points++;
        session()->put('userPoint', $user->points);
        $user->save();
        return redirect()->route('UserDashboard');
    }
}
