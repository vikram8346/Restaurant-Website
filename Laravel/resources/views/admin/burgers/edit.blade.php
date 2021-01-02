<!DOCTYPE html>
<html>
<head>
	<title>Add Burgers</title>
</head>
<body>
h2>Update/Delete Burger</h2>
	<form class="form-horizontal" method="post" action="/burger/public/burgerss/{{$burger ?? ''->id}}">
		@csrf
		@method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" value="{{$burger ?? ''->bname}}" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Description</label>  
			  <div class="col-md-4">
			  <input id="color" name="color" type="text" placeholder="Enter color" class="form-control input-md" value="{{$burger ?? ''->descrp}}" required="required">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Quantity</label>  
			  <div class="col-md-4">
			  <input id="company" name="company" type="text" placeholder="Enter company name" class="form-control input-md" value="{{$burger ?? ''->quant}}" required="required">
			    
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

		<form class="form-horizontal" method="post" action="/burger/public/burgers/{{$burger ?? ''->id}}">
			@csrf
			@method('delete')
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Delete</button>
			  </div>
			</div>
		</form>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div>
			<a href="/burger/public/burgers">Show Cars</a>
		</div>

</body>
</html>>