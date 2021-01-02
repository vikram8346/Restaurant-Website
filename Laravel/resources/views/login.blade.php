<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/ciudad.css')}}">
	<script 
	src='https://kit.fontawesome.com/a076d05399.js'>
	</script>
	<script type="text/javascript">
    function redirect() {
        window.location.href = "http://nxp9797.uta.cloud/";
      }
  	</script>

</head>
<body>
	<div class="wrapper">
		<div id="part-1-cont">
	      <div class="navbar">
	        <img src="{{ asset('5.png') }}" class="headerimg"></a>
	        <a href="/">Inicio</a>
	        <a href="sobrenosotros">Sobre Nosotros</a>
	        <a href="menu">Menu</a>
	        <a class="frmclick" onclick="redirect();">Blog</a>
	        <a href="contact">Contacto</a>
	        <a href="{{url('register')}}">Registro</a>
	        <a href="{{url('login')}}">Iniciar sesion</a>
	      </div>
	  </div>
		<div class="form-popup" id="myForm">
			      <form class="form-container" name="LoginForm" action="{{url('post-login')}}" method="POST">
			      	{{ csrf_field() }}
			        <h1>
			        	<img src="Burguer.png" class="formImg">Iniciar Sesion</h1>
			        <hr>
			        <label for="email"><b>Usuario</b></label>
			        <input type="email" name="email" required>
			        @if ($errors->has('email'))
                  	<span class="error">{{ $errors->first('email') }}</span>
                  	@endif 

			        <label for="psw"><b>Contrasena</b></label>
			        <input type="password" name="password" required>
			        @if ($errors->has('password'))
                  	<span class="error">{{ $errors->first('password') }}</span>
                  	@endif
			        <hr>
			        <div style="text-align: right;"><button type="submit" class="btn">Entrar</button></div>
			    </form>
			  </div>
</div>
</body>
</html>