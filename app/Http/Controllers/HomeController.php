<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Customer;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('home.login');
    }
    public function CheckLogin(Request $request)
    {
        $this->validate($request,
            [
                'mob_num'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'password'=>'required|string',
            ],
            [
                'mob_num.required'=>'*Please give valid phone number!',
                'password.required'=>'*Please give correct password',
            ]
        );

        $admin = Admin::where('phone', $request->mob_num)
                           ->where('password', $request->password)
                           ->first();
        $customer = Customer::where('phone', $request->mob_num)
                           ->where('password', $request->password)
                           ->first();
        if($admin)
        {
            $request->session()->put('adminId', $admin->id);
            $request->session()->put('adminPhone', $admin->phone);
            return redirect()->route('AdminDashboard');
        }

        elseif($customer)
        {
            $request->session()->put('userId', $customer->id);
            $request->session()->put('userPhone', $customer->phone);
            $request->session()->put('userPoint', $customer->points);
            return redirect()->route('UserDashboard');
        }
    }

    public function signup()
    {
        return view('home.signup');
    }

    public function CheckSignup(Request $request)
    {
        $this->validate($request,
	     	[
	     		'f_name' => 'required | min:2 | string ',

	     		'l_name' => 'required | min:3 | string ',

	     		'email' => 'required | email',

	     		'mob_num' => 'required | min:10 ',

	     		'password' => 'required | min:8'
	     	],

	     	[
	     		'f_name.required' => '*Please fill up your First Name properly!',
	     		'f_name.min' => '*Minimum 2 character',
	     		'l_name.required' => '*Please fill up your Last Name properly!',
	     		'l_name.min' => '*Minimum 3 character',
	     		'email.required' => '*Please fill up your Email properly!',
	     		'mob_num.required' => '*Please fill up your phone number properly!',
	     		'mob_num.min' => '*Minimum 10 digits',
	     		'password.required' => '*Please fill up your Password properly!',
	     		'password.min' => '*Minimum 8 character'
	     	]
	     );

        $var = new Customer();
        $var->firstname = $request->f_name;
        $var->lastname = $request->l_name;
        $var->email = $request->email;
        $var->phone = $request->mob_num; 
        $var->password = $request->password;
        $var->points = '0';
        $var->save();

        
        return redirect()->route('Login');
        
    }

    public function logout()
    {
        session()->forget('adminId');
        session()->forget('adminPhone');
        session()->forget('userId');
        session()->forget('userPhone');
        session()->forget('userPoints');
        return redirect()->route('Login');
    }

}
