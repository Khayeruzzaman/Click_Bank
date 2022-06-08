@extends('layouts.user.user')

@section('title')
    {{'User Notice'}}
@endsection

@section('content')

<style>
		
		.viewUsers{

			

			width: auto;
        	height: auto;
	        margin: 25px 25px 25px 25px;
	        padding:50px;
	        min-height: 20vh;
	        max-height: auto;
	        background: transparent;
	        border-radius: 10px;
	        box-shadow: 0px 0px 10px black;
	        
		}

        .viewUsers .container-title{

			display: flex;
			width: auto;
			height: auto;
			background-color: #2E7D32;
	        

		}

		#title{
			margin-left: 20px;
			font-family: Roboto-Thin;
			color: black;
            text-transform: uppercase;
		}

		#body{
			font-size: 20px;
			color: black;
			margin-left: 20px;
			font-family: Roboto-Regular;
		}

        #btn{

            margin-left:20px;
            text-transform: uppercase;
        }

		
	</style>

<div class="dashContent">


	

	<div class="viewUsers">
		
		
			<h2 id="title">{{ $news->title }} </h2> 
		
			<p id="body">{{ $news->description }}</p>
        
            <a href="/user/news/video/{{$news->id}}">
                <button id= "btn" type="button" class="btn btn-primary">Watch</button>
            </a>

	</div>

	

</div>

@endsection