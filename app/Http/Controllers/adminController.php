<?php

namespace App\Http\Controllers;


use App\Models\Post;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminDashboard()
    {

        return view('admin.adminDashboard');
    }

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

        return redirect()->route('AdminDashboard');
    }
}
