<!DOCTYPE html>
<html>
<head>
	<title>Burgers's Details</title>
</head>
<body>
	<h1><?php echo e($burgers->bname); ?></h1>
	<br>
	<h1><?php echo e($burgers->descrp); ?></h1>
	<br>
	<h1><?php echo e($burgers->quant); ?></h1>
	<br>
	<a href="<?php echo e($burgers->id); ?>/edit">Edit Burger</a>

</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/burgers/show.blade.php ENDPATH**/ ?>