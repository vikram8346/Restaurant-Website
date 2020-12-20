<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/ciudad.css')); ?>"/>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
        <img src="5.png" class="headerimg">
        <a href="/">Inicio</a>
        <a href="sobrenosotros">Sobre Nosotros</a>
        <a href="menu">Menu</a>
        <a class="frmclick" onclick="redirect();">Blog</a>
        <a href="contact">Contacto</a>
        <a href="register">Registro</a>
        <a href="login">Iniciar sesion</a>
      </div>
	  <div>
        <h4 align="center">
          DI HOLA
        </h4>
        <h1 align="center">
          Contacto 
        </h1>
      </div>
    </div>
	<div class="second-part-cont">
		<img src="Burguer.png", width="30", height="30">
		<h2>Di hola</h2>
		<p>Di hola, envianos mensaje</p>
    <p>Envianos tus comentarios y suguerencias ustedes son importante para nosotros</p>
	    <form name="contform" action="<?php echo e(route('contact.store')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div>
				<input type="text" class="textbox" name="fname" placeholder="Name" size="50" required>
		    <input type="email" class="textbox" name="email" placeholder="Email" size="50" required>
		    </div>
		    <div>
		        <input type="text" class="textbox" name="subject" placeholder="Subject" class="textbox" size="108" required>
		    </div>
		    <textarea class="message" placeholder="Message" style="height:100px" required></textarea>
        <br>
        <?php echo csrf_field(); ?>
        <button class="cont-button" type="submit">Enviar Mensiage</button>
		</form>

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
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/contact/create.blade.php ENDPATH**/ ?>