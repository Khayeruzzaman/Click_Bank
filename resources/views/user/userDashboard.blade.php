@extends('layouts.user.user')

@section('title')
    {{'User Dashboard'}}
@endsection

@section('content')

	<style>
		
		

		.viewUsers{
			
			width:95%;
	        margin: 25px 0px 25px 15px;
	        padding:50px;
	        min-height: 60vh;
	        max-height: auto;
	        background: transparent;
	        border-radius: 10px;
	        box-shadow: 0px 0px 10px black;
	        
		}

		

        .viewUsers .newsLabel{

			display:block;
	        font-weight: bold;
	        text-transform: uppercase;

		}

		.viewUsers .news{

			width: 100%;
		}

		.viewUsers .newsBody{

			display:block;
	        width: 100%;
	        border: 1px solid #000;
	        padding:5px;
	        box-sizing: border-box;
	        min-height: 30vh;
		}

		.viewUsers .btnSubmit{

			font-size:1.2rem; 
		    text-transform: uppercase;
		    cursor: pointer;
		    background-color: #373b8b;
		    color: white;
		    border-radius: 2px;
		    width: auto;
		    height: 35%;


		}

		.viewUsers .btnSubmit:hover{
			background-color: white;
			color: black;
		}


		
	</style>

<div class="dashContent">

	<div class="viewUsers">

		

	</div>

	

</div>


@endsection