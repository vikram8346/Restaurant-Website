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
		@foreach($burgers as $burger)
		<tr>
			<td><a href="burgers/{{$burger->id}}">{{$burger->bname}}, {{$burger->descrp}}, {{$burger->quant}}</a> </td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>
	<a href="/create">Add New Burger</a>

</body>
</html>>