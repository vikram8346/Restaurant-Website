<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="ciudad.css"/>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script type="text/javascript">
    function redirect() {
        window.location.href = "http://nxp9797.uta.cloud/";
      }
  </script>
	
</head>
<body>
	<div class="wrapper">
		<div id="part-1-sob">
			<div class="navbar">
				<img src="5.png" class="headerimg"></a>
				<a href="Inicio.php">Inicio</a>
				<a href="SobreNosotros.php">Sobre Nosotros</a>
				<a href="Menu.php">Menu</a>
				<a href="http://nxp9797.uta.cloud/">Blog</a>
				<a href="Contacto.php">Contacto</a>
				<a class="frmclick" onclick="openRegisterForm();">Registro</a>
				<a class="frmclick" onclick="openLoginForm();">Iniciar sesion</a>
			</div>
			<div class="toppart">
				<h4 align="center">LAS MEJORES DE LA CIUDAD</h4>
				<h2 align="center">Sobre nuestras Hamburguesas</h2>
			</div>
		</div>
		<div>
			<img src="hamburguesa1.jpg" hspace="30" style="width:300px;height:300px;">
			<img src="hamburguesa2.jpg" style="width:300px;height:300px;">
		</div>
		<h2> Somos Ibra </h2>
		</p style="text-align: center;">Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de nosotros mismos.<br>
		Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las<br> mejores entregas y, sobre todo, las mejores Hamburguesas..</p> 




			<div class="split">
				<p>Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la pizzería DomiPizza's, con una inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</p>
				<p><br>A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</p>
			</div>
	
		<button type="button" style="background-color: red;text-align: center;">VER EL MENÚ HOY</button>
		<button type="button" style="background-color: green">PEDIR AHORA</button> <br>

		<br><br>
	


		<img src="burguer.png" style="width:50px; display: block;
  			margin-left: auto;
  margin-right: auto;
  width: 40% height:50px"/>


  <h2 >Lo que dicen los clientes</h2>


  <div class="threecol">
  <div class="row">
  <div class="column">
    <p>Las Mejores Hamburguesas</p>
    <p>Me gustan sus Hamburguesas, siempre seran mi lugar de encuetros y buenos recuerdas acompañados de la mejor Hamburguesa</p>
  </div>
  <div class="column">
    <p>Que Hamburguesa mas Increible</p>
    <p align="left">Voy con mi familia a compertir de la buena comida y servicio que prestan, los recomiendo a mis amigos, los felicito</p>
  </div>
  <div class="column">
    <p>La mejor hamburguesa de la ciudad</p>
    <p align="left">Soy amante de la buena hamburguesa y puedo decir que me gusta lo bien que la preparan, el hambiente es como y muy familiar, cada ves que tengo la oportunidad de darme un gusto lo visito porque se que sere bien atendido y comere una excelente hamburguesa</p>
  </div>
  <h2 align="center">Nos esforzamos por brindar un buen servicio para su disfrute.</h2>

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
      <div class="form-popup" id="myForm">
        <form class="form-container" name="LoginForm" onsubmit="return LogIn()" action="Login.php" method="POST">
          <div class="frmclose" onclick="closeLoginForm()">X</div>
          <h1>
            <img src="Burguer.png" class="formImg">Iniciar Sesion</h1>
          <hr>
          <label for="email"><b>Usuario</b></label>
          <input type="email" name="email" required>

          <label for="psw"><b>Contrasena</b></label>
          <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <hr>
          <div style="text-align: right;"><button type="submit" class="btn">Entrar</button></div>
        </form>
    </div>
     <div class="form-popup" id="rgForm">
      <form class="form-container-register" name="RegisterForm" onsubmit="return Register()" action="insert.php" method="POST">
        <div class="frmclose" onclick="closeRegisterForm()">X</div>
        <h1><img src="Burguer.png" class="formImg"> Registro de Usuario</h1>
        <hr>
        <label for="name"><b>Nombre y apellido:</b></label>
        <input type="text" name="name" required>

        <label for="email"><b>Correo</b></label>
        <input type="email" name="email" email>

        <label for="psw"><b>Contrasena</b></label>
        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

        <label for="rpsw"><b>Repetir Contrasena:</b></label>
        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <label for="addr"><b>Direccion:</b></label>
        <textarea rows="5" style="width: 350px;"></textarea>
        <hr>
        <div style="text-align: right;"><button type="submit" class="btn">Cargar</button></div>
    </form></div>
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

      function openRegisterForm() {
        document.getElementById("rgForm").style.display = "block";
      }
      function closeRegisterForm() {
        document.getElementById("rgForm").style.display = "none";
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