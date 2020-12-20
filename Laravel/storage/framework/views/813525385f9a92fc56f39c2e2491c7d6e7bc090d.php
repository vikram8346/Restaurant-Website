<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/ciudad.css')); ?>"/>
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
	<?php if(isset(Auth::user()->email)): ?>
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
		<h1>
			Welcome
		</h1>
		<br><br>
		<a class="small" href="<?php echo e(url('logout')); ?>">Logout</a>
	<?php else: ?>
	<script>window.location = "/login";</script>
	<?php endif; ?>

</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/dashboard.blade.php ENDPATH**/ ?>