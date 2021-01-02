<!DOCTYPE html>
<html>
<head>
	<title>Burgers's Details</title>
</head>
<body>
	<h1>{{$burgers->bname}}</h1>
	<br>
	<h1>{{$burgers->descrp}}</h1>
	<br>
	<h1>{{$burgers->quant}}</h1>
	<br>
	<a href="{{$burgers->id}}/edit">Edit Burger</a>

</body>
</html>