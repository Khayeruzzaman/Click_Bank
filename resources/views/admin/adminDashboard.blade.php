@extends('layouts.admin.admin')

@section('title')
    {{'Dashboard'}}
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

		<form method="post" action="{{route('AdminPost')}}" enctype="multipart/form-data">
		{{csrf_field()}}

		<label class="newsLabel"> Title </label>
		<input type="text" name="newstitle" class="news">
		<br>
		@if($errors->has('newstitle'))
			<span class="text-danger">
				<strong> {{$errors->first('newstitle')}} </strong>
			</span>
		@endif 

		<br>


		<label class="newsLabel">Description</label>
		<textarea name="newsBody" class="newsBody">
			
		</textarea>

		@if($errors->has('newsBody'))
			<span class="text-danger">
				<strong> {{$errors->first('newsBody')}} </strong>
			</span>
		@endif
		<br>
		
		<label class="newsLabel"> Link </label>
		<input type="text" name="newsLink" class="news">
		<br>
		@if($errors->has('newsLink'))
			<span class="text-danger">
				<strong> {{$errors->first('newsLink')}} </strong>
			</span>
		@endif 

		<br>

		<input class="btnSubmit" type="submit" name="submit" value="Submit">

		</form>

	</div>

	

</div>


@endsection