@extends('layouts.home.home')

@section('title')
    {{'Login'}}
@endsection

@section('content')
    <style type="text/css">
    
    .form legend{
        font-size: 1.2rem;
        font-weight: bold;
        text-align: center;
        
    }
    .form {
            width: 25.92%;
            margin: 7.2% 38.76%;
            padding: 4.32%;
            border-radius: 5%;
            box-shadow: 0px 0px 30px black;
            
        }
    .form  label {
            display:block;
            font-size: 0.75rem;
            font-weight: bold;
            text-transform: uppercase;
        }

    .form  input {
            display:block;
            width: 100%;
            border: 1px solid #000;
            padding: 0.35%;
            box-sizing: border-box;
        }
    .btn1 {
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
        background: linear-gradient(315deg, #6a93cb 0%, #a4bfef 74%);
        border-radius:10px;
        
    }
    .btn1:hover{
        background: white;
    }
    </style>

    <div class= "form">
        <fieldset>

        <form action="#" method="post">
            {{csrf_field()}}
            <legend>LOGIN</legend>
            <br>

            <label>Mobile Number</label>
            <input class="form-control" type="text" name="mob_num"  value="{{old('mob_num')}}">
            @if($errors->has('mob_num'))
                <span class="text-danger">
                    <strong> {{$errors->first('mob_num')}} </strong>
                </span>
            @endif <br>

            <label>Password</label>
            <input class="form-control" type="text" name="password"  value="{{old('password')}}">
            @if($errors->has('password'))
                <span class="text-danger">
                    <strong> {{$errors->first('password')}} </strong>
                </span>
            @endif <br>

            <input class= "btn1" type="Submit"  name="Login" value="Login">
            <br>

            <center>
                <label>
                    Don't have an account?
                </label>
                <a style="text-decoration: none;" href="{{route('Signup')}}" >Signup</a>
                
            </center>


        </form>
        
    </fieldset>
    </div>

@endsection