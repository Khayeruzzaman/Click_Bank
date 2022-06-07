@extends('layouts.home.home')

@section('title')
{{'Registration'}}
@endsection

@section('content')


<style type="text/css">

.form legend {
    font-size: 1.2rem;
    font-weight: bold;
    text-align: center;
}
.form {
        width:30.4%;
        margin: 1.4% 34.48%;
        padding: 2.6%;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        
      }
.form  label {
        display:block;
        font-size: 0.8rem;
        font-weight: bold;
        text-transform: uppercase;
      }
.form legend{
        display:block;
        font-weight: bold;
        box-sizing: border-box;
}
.form  input {
        display:block;
        width: 100%;
        border: 1px solid #000;
        padding: 0.36%;
        box-sizing: border-box;
      }
.error-msg{

	font-size:0.8rem;
}
.btn1 {
	font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    background: linear-gradient(315deg, #6a93cb 0%, #a4bfef 74%);
    border-radius: 10px;
}
.btn1:hover{
	background: white;
}
</style>

<div class= "form">
	<fieldset>

	<form action="#" method="post">
		{{csrf_field()}}
		<legend>Registration</legend>
		<br>

		<label>First Name</label>
		<input class="form-control" type="text" name="f_name"  value="{{old('f_name')}}">
		@if($errors->has('f_name'))
			<span class="text-danger">
				<strong class="error-msg"> {{$errors->first('f_name')}} </strong>
			</span>
		@endif <br>

		<label>Last Name</label>
		<input class="form-control" type="text" name="l_name"  value="{{old('l_name')}}">
		@if($errors->has('l_name'))
			<span class="text-danger">
				<strong class="error-msg"> {{$errors->first('l_name')}} </strong>
			</span>
		@endif <br>

		<label>Email</label>
		<input class="form-control" type="text" name="email"  value="{{old('email')}}">
		@if($errors->has('email'))
			<span class="text-danger">
				<strong class="error-msg"> {{$errors->first('email')}} </strong>
			</span>
		@endif <br>

		<label>Mobile Number</label>
		<input class="form-control" type="text" name="mob_num"  value="{{old('mob_num')}}">
		@if($errors->has('mob_num'))
			<span class="text-danger">
				<strong class="error-msg"> {{$errors->first('mob_num')}} </strong>
			</span>
		@endif <br>

		<label>Password</label>
		<input class="form-control" type="text" name="password"  value="{{old('password')}}">
		@if($errors->has('password'))
			<span class="text-danger">
				<strong class="error-msg"> {{$errors->first('password')}} </strong>
			</span>
		@endif <br>

		<input class= "btn1" type="Submit"  name="submit">
		<br>

		<center>
            <label>Already Have an Account?</label>
            <a style="text-decoration: none;" href="{{ route('Login') }}">Login</a>
        </center>



	</form>
	
</fieldset>
</div>

	
@endsection