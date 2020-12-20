<!DOCTYPE html>
<html>
<head>
	<title>List of Burgers</title>
</head>
<body>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
		<?php $__currentLoopData = $burgers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $burger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><a href="burgers/<?php echo e($burger->id); ?>"><?php echo e($burger->bname); ?>, <?php echo e($burger->descrp); ?>, <?php echo e($burger->quant); ?></a> </td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<hr>
	<a href="/create">Add New Burger</a>

</body>
</html>><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/burgers/adminpage.blade.php ENDPATH**/ ?>