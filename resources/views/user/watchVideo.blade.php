@extends('layouts.user.user')

@section('title')
    {{'Watching Video'}}
@endsection

@section('content')

<style>
		
		.viewUsers{
			width: auto;
        	height: auto;
	        margin: 25px 25px 25px 25px;
	        padding:50px;
	        min-height: 70vh;
	        max-height: auto;
	        background: transparent;
	        border-radius: 10px;
	        box-shadow: 0px 0px 10px black;
	        
		}
		
    
		
	</style>
	

<div class="dashContent">
	

	<div class="viewUsers">

		<h1 class="counter"></h1><br><br>

		
		<x-embed id="x" url="{{$news->link}}" />
		<br>
		
		<a href="{{route('PointIncrease')}}">
		<button id="btn" class= "btn btn-primary" > Action Button </button>
		</a>
		
		<script>
			
			$(function() {
				$('.counter').setCountDownTimer({
				time: "00:00:30",
				button: $('#btn'),
				countDownText: '',
				afterCountText: '00:00'
				});
				});

		</script>
	</div>


</div>



@endsection