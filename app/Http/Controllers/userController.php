<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userDashboard()
    {

        return view('user.userDashboard');
    }
}
