<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .nav-item a{
        text-decoration:none;
    }

    .nav-item a:hover{
        color:white;
    }
</style>
<nav class="navbar navbar-light" style="background: linear-gradient(315deg, #5de6de 0%, #b58ecc 74%); text-transform: uppercase; ">
	
	<div class="container-fluid" style="justify-content: center;">
		
        <ul class="nav justify-content-center">
		  <li class="nav-item" style="font-size: 1.1rem; font-weight:bold; width:6rem;">
		    <a  href="{{ route('Login') }}"> Login </a>
		  </li>

          <li class="nav-item" style="font-size: 1.1rem; font-weight:bold;">
		    <a href="{{ route('Signup') }}"> Signup </a>
		  </li>
		  
		</ul>
        
	</div>

</nav>