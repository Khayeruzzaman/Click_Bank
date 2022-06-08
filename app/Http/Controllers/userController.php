<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Post;
use App\Models\Customer;

use Illuminate\Http\Request;

class userController extends Controller
{

    //User Dashboard
    public function userDashboard()
    {

        $news =Post::orderby('created_at','desc')->get();
        return view('user.userDashboard')->with('news', $news);;
    }

    // Users Post
    public function newsShow(Request $request)
    {

        $news = Post::where('id',$request->id)->first();
        return view('user.news')->with('news', $news);;
    }

    //Users Video
    public function showVideo(Request $request)
    {

        $news = Post::where('id',$request->id)->first();
        return view('user.watchVideo')->with('news', $news);;
    }

    // User Point Increasing
    public function pointIncrease()
    {

        $user = Customer::where('id',session()->get('userId'))->first();
        $user->points++;
        session()->put('userPoint', $user->points);
        $user->save();

        Alert::success('Congrats',"Successfully 1 Point Has Been Added");
        return redirect()->route('UserDashboard');
    }
}
