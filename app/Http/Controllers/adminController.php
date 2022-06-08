<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Post;

use Illuminate\Http\Request;

class adminController extends Controller
{

    //Admin Dashboard
    public function adminDashboard()
    {

        return view('admin.adminDashboard');
    }

    // Admin Creating Post With Validation
    public function adminPost(Request $request)
    {

        $this->validate($request, 
    		[
    			'newstitle' => 'required',
    			'newsBody' => 'required',
				'newsLink'=> 'required',
    		],

    		[
    			'newstitle.required'=> 'Please fill up the title properly!',
    			'newsBody.required'=> 'Please write the description properly!',
                'newsLink.required'=> 'Please enter your the link!'
    		]
        );

        $news = new Post();
        $news->title = $request->newstitle;
        $news->description = $request->newsBody;
		$news->link = $request->newsLink;
        $news-> save();

        Alert::success('Congrats',"The Video has been added sucessfully");
        return redirect()->route('AdminDashboard');
    }
}
