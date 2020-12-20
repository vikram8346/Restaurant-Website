<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="ciudad.css"/>
</head>
<body>
	<body id="wrapper">
	<header>
		<div id="section1" class="navbar">
			<img src="5.png" class="headerimg">
			<a href="Inicio.html">Inicio</a>
			<a href="SobreNosotros.html">Sobre Nosotros</a>
			<a href="Menu.html">Menu</a>
			<a href="Blog.html">Blog</a>
			<a href="Contacto.html">Contacto</a>
			<a href="Registro.html">Registro</a>
			<a href="iniciar sesion.html">Iniciar sesion</a>
			<div>
				<h4 align="center">
					LAS MEJORES DE LA CIUDAD
				</h4>

				<h1 align="center">
					Hamburguesas
				</h1>
				<button class="open-button" onclick="openForm()">Click to Login</button>
			</div>
		</div>
	</header>



<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  	<img src="Burguer.png", class="formImg">
    <h1>Iniciar Sesion</h1>

    <label for="eml"><b>Usuario</b></label>
    <input type="email" name="eml" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">

    <label for="psw"><b>Contrasena</b></label>
    <input type="password" name="psw" maxlength="10" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,10}">

    <button type="submit" class="btn" onclick="myFunction()">Entrar</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>