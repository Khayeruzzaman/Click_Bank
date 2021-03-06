@extends('layouts.user.user')

@section('title')
    {{'User Dashboard'}}
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
	        text-transform: uppercase;

		}

		#title{
			margin-left: 20px;
			font-family: Roboto-Thin;
			color: #FAFAFA;
		}

		#date{
			font-size: 20px;
			color: #FAFAFA;
			margin-left: 20px;
			font-family: Roboto-Regular;
		}

		
	</style>

<div class="dashContent">

@foreach($news as $n)
	
	<a href="/user/news/{{ $n->id }}" style="text-decoration:none;">
	<div class="viewUsers">
		
		<div class = 'container-title'>
			<h2 id="title">{{ $n->title }} </br></h2> 
		</div>
		
		<div class = 'container-title'>
			<p id="date">{{ $n->updated_at }}</p>
		</div>

	</div></a>
@endforeach
	

</div>


@endsection