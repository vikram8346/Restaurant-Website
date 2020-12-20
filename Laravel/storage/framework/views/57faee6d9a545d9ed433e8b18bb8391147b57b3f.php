<!DOCTYPE html>
<html>
<head>
	<title>Add Burgers</title>
</head>
<body>
	<form class="form-horizontal" method="post" action="create">
		<?php echo csrf_field(); ?>
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="bname">Name</label>  
			  <div class="col-md-4">
			  <input id="bname" name="bname" type="text" placeholder="Enter Name" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Description</label>  
			  <div class="col-md-4">
			  <input id="descrp" name="descrp" type="text" placeholder="Enter Description" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Quantity</label>  
			  <div class="col-md-4">
			  <input id="quant" name="quant" type="text" placeholder="Enter the Quantity" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">ADD</button>
			  </div>
			</div>

			</fieldset>
		</form>

		<?php if($errors->any()): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
		
		<div>
			<a href="/burgers/show">List Burgers</a>
		</div>

</body>
</html>><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/burgers/create.blade.php ENDPATH**/ ?>