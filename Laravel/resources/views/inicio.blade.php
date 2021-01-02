<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('css/ciudad.css')}}"/>
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
		<div id="part-1">
			<div class="navbar">
				<img src="5.png" class="headerimg">
				<a href="/">Inicio</a>
				<a href="sobrenosotros">Sobre Nosotros</a>
				<a href="menu">Menu</a>
				<a class="frmclick" onclick="redirect();">Blog</a>
				<a href="contact">Contacto</a>
				<a href="register">Registro</a>
				<a href="login">Iniciar sesion</a>
			</div>
			<div class="toppart">
				<h4 align="center">LAS MEJORES DE LA CIUDAD</h4>
				<h1 id="title" align="center">Hamburguesas</h1>
				<button type="button" class="top_btn" onclick="location.href='menu'">VER MENÚ HOY</button>
			</div>
		</div>
		<div class="middle_part">
			<img src="Burguer.png", width="30", height="30">
			<h1 align="center">Nuestra historia</h1>
			<img src="story1.png", id="l_img">
			<img src="story2.png", id="r_img">
			<div class="middle_text">
				<div class="cpart">
					<p>Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</p>
				</div>
				<div class="cpart">
					<p>
						A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.
					</p>
				</div>
			</div>
		</div>
		<div class="lastpart">
			<div>
				<img src="Burguer.png" width="30" height="30">
				<h1 class="last_heading">Las mas vendidos</h1>
				<div class="inicio_items">
				  <div class="items">
				  	<div class="box">
				  	<img id="img1" src="burguer1.png">
					<p>Mixta</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				  </div>
				  <div class="items">
				  	<div class="box">
				  	<img id="img2" src="burguer2.png">
					<p>Pollo</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				  </div>
				  <div class="items">
				  	<div class="box">
				  	<img id="img3" src="burguer3.png">
					<p>Carne</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				  </div>
				  <div class="items">
				  	<div class="box">
				  	<img id="img1" src="burguer1.png">
					<p>Mixta</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				  </div>
				  <div class="items_2">
				  	<div class="box">
				  	<img id="img2" src="burguer2.png">
					<p>Pollo</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				  </div>
				  <div class="items_2">
				  	<div class="box">
				  	<img id="img3" src="burguer3.png">
					<p>Carne</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				  </div>
				  <div class="items_2">
				  	<div class="box">
				  	<img id="img1" src="burguer1.png">
					<p>Mixta</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				  </div>
				  <div class="items_2">
				  	<div class="box">
				  	<img id="img2" src="burguer2.png">
					<p>Pollo</p>
					<p>$11.90</p>
					<button class="box_btn" type="button">Ordenar ahora</button>
					</div>
				</div>
				</div>
				<div class="af_grd">
					<button type="button" onclick="location.href='Menu.html'">VER MENÚ HOY</button>
				</div>			
		</div>
		</div>	

		<div class="footer">
			<img src="5.png" id="footerlogo">
			<div id="footerContent">
		        <p class="GreenPart">Habla a:</p>
		        <p>Av. Intercomunal, sector la Mora, calle 8</p>
		        <p class="GreenPart"> Telefono:</p>
		        <p>+58 251 261 00 01</p>
		        <p class="GreenPart">Correo:</p>
		        <p>yourmail@gmail.com</p>
		        <i class='fab fa-pinterest' style="padding-right: 11px;"></i>
				<i class='fab fa-facebook-f' style="padding-right: 11px;"></i>
				<i class='fab fa-twitter' style="padding-right: 11px;"></i>
				<i class='fab fa-whatsapp' style="padding-right: 11px;"></i>
				<i class='fab fa-linkedin' style="padding-right: 11px;"></i>
				<i class='fab fa-vimeo-v'></i>
				<p style="opacity: 0.7;">Copyright &copy2020 Todos los derechos reservados | Este sitio esta hecho con &hearts; por DiazApps</p>
			</div>
		</div>

	<script type="text/javascript">
	    function openLoginForm() {
	      document.getElementById("myForm").style.display = "block";
	    }
	    function closeLoginForm() {
	      document.getElementById("myForm").style.display = "none";
	    }

	  function LogIn() {
      var em = document.forms["LoginForm"]["email"].value;
      var pass = document.forms["LoginForm"]["psw"].value;

      if (em == "")
      {
        alert("Email cannot be empty");
        return (false);
      }
      if (pass == "")
      {
        alert("Password cannot be empty");
        return (false);
      }
      
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(LoginForm.email.value))
      {
      	return (true);
      } 

      if (/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}/.test(LoginForm.psw.value))
      {
      	return (true);
      } 

      else {
        alert("Email or Password is Wrong")
        return (false);
      }
    }


	function Register() {
      var name = document.forms["RegisterForm"]["name"].value;
      var em = document.forms["RegisterForm"]["email"].value;
      var pass = document.forms["RegisterForm"]["psw"].value;
      var rpass = document.forms["RegisterForm"]["rpsw"].value;

      if (name == "") {
        alert("Username cannot be empty");
        return false;
      }

      if (em == "") {
        alert("Email cannot be empty");
        return false;
      }
      if (pass == "") {
        alert("Password cannot be empty");
        return false;
      }
      if (rpass != pass) {
        alert("Password doesn't match");
        return false;
      }
      
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(RegisterForm.email.value))
      {
      	return (true);
      } 

      else {
        alert("Email or password is wrong")
        return (false);
      }
      
    }
    </script>
</body>
</html>

