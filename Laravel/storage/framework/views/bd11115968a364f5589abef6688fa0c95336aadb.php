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
	  <div class="form-popup" id="rgForm">
      <form class="form-container-register" name="RegisterForm" action="<?php echo e(url('post-registration')); ?>" method="POST">
      	<?php echo e(csrf_field()); ?>

        <h1><img src="Burguer.png" class="formImg"> Registro de Usuario</h1>
        <hr>
        <label for="name"><b>Nombre y apellido:</b></label>
        <input type="text" name="name" required>
        <?php if($errors->has('name')): ?>
        <span class="error"><?php echo e($errors->first('name')); ?></span>
        <?php endif; ?>

        <label for="email"><b>Correo</b></label>
        <input type="email" name="email" email>
        <?php if($errors->has('email')): ?>
        <span class="error"><?php echo e($errors->first('email')); ?></span>
        <?php endif; ?>

        <label for="psw"><b>Contrasena</b></label>
        <input type="password" name="password" required>
        <?php if($errors->has('password')): ?>
        <span class="error"><?php echo e($errors->first('password')); ?></span>
        <?php endif; ?>

        <label for="rpsw"><b>Repetir Contrasena:</b></label>
        <input type="password" name="rpassword" required>
        <?php if($errors->has('rpassword')): ?>
        <span class="error"><?php echo e($errors->first('rpassword')); ?></span>
        <?php endif; ?>

        <label for="addr"><b>Direccion:</b></label>
        <textarea rows="5" style="width: 350px;"></textarea>
        <hr>
        <div style="text-align: right;"><button type="submit" class="btn">Cargar</button></div>
    </form>
  </div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/register.blade.php ENDPATH**/ ?>