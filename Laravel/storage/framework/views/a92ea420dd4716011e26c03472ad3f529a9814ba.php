<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/ciudad.css')); ?>">
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
	        <img src="<?php echo e(asset('5.png')); ?>" class="headerimg"></a>
	        <a href="/">Inicio</a>
	        <a href="sobrenosotros">Sobre Nosotros</a>
	        <a href="menu">Menu</a>
	        <a class="frmclick" onclick="redirect();">Blog</a>
	        <a href="contact">Contacto</a>
	        <a href="<?php echo e(url('register')); ?>">Registro</a>
	        <a href="<?php echo e(url('login')); ?>">Iniciar sesion</a>
	      </div>
	  </div>
		<div class="form-popup" id="myForm">
			      <form class="form-container" name="LoginForm" action="<?php echo e(url('post-login')); ?>" method="POST">
			      	<?php echo e(csrf_field()); ?>

			        <h1>
			        	<img src="Burguer.png" class="formImg">Iniciar Sesion</h1>
			        <hr>
			        <label for="email"><b>Usuario</b></label>
			        <input type="email" name="email" required>
			        <?php if($errors->has('email')): ?>
                  	<span class="error"><?php echo e($errors->first('email')); ?></span>
                  	<?php endif; ?> 

			        <label for="psw"><b>Contrasena</b></label>
			        <input type="password" name="password" required>
			        <?php if($errors->has('password')): ?>
                  	<span class="error"><?php echo e($errors->first('password')); ?></span>
                  	<?php endif; ?>
			        <hr>
			        <div style="text-align: right;"><button type="submit" class="btn">Entrar</button></div>
			    </form>
			  </div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/login.blade.php ENDPATH**/ ?>