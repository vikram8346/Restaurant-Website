<!DOCTYPE html>
<html>
<head>
	<title>Add Burgers</title>
</head>
<body>
h2>Update/Delete Burger</h2>
	<form class="form-horizontal" method="post" action="/burger/public/burgerss/<?php echo e($burger ?? ''->id); ?>">
		<?php echo csrf_field(); ?>
		<?php echo method_field('put'); ?>
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" value="<?php echo e($burger ?? ''->bname); ?>" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Description</label>  
			  <div class="col-md-4">
			  <input id="color" name="color" type="text" placeholder="Enter color" class="form-control input-md" value="<?php echo e($burger ?? ''->descrp); ?>" required="required">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Quantity</label>  
			  <div class="col-md-4">
			  <input id="company" name="company" type="text" placeholder="Enter company name" class="form-control input-md" value="<?php echo e($burger ?? ''->quant); ?>" required="required">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Update</button>
			  </div>
			</div>

			</fieldset>
		</form>

		<form class="form-horizontal" method="post" action="/burger/public/burgers/<?php echo e($burger ?? ''->id); ?>">
			<?php echo csrf_field(); ?>
			<?php echo method_field('delete'); ?>
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Delete</button>
			  </div>
			</div>
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
			<a href="/burger/public/burgers">Show Cars</a>
		</div>

</body>
</html>><?php /**PATH C:\xampp\htdocs\Laravel\lv-project5\resources\views/burgers/edit.blade.php ENDPATH**/ ?>