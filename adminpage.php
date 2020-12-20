<?php 
	include('dbconnection.php');
	session_start();
?>

<!DOCTYPE HTML>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="ciudad.css"/>
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
		<div id="topmost">
			<div class="navbar">
				<img src="5.png" class="headerimg">
				<a href="Inicio.php">Inicio</a>
        		<a href="SobreNosotros.php">Sobre Nosotros</a>
       			<a href="Menu.php">Menu</a>
        		<a class="frmclick" onclick="redirect();">Blog</a>
        		<a href="Contacto.php">Contacto</a>
        		<a href="Logout.php">Logout</a>
			</div>
		
		<?php $results = mysqli_query($connection, "SELECT * FROM burgers"); ?>
		<table class="disptable">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Quant</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			
			<?php while ($row = mysqli_fetch_array($results)) { ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['descrp']; ?></td>
					<td><?php echo $row['quant']; ?></td>
					<td>
						<a href="adminpage.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
					</td>
					<td>
						<a href="adminpage.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
		
			<form class="adminform" method="post" action="dbconnection.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group">
					<label>Name</label>
					<input type="text" name="name" value="<?php echo $name; ?>">
				</div>
				<div class="input-group">
					<label>Description</label>
					<input type="text" name="descrp" value="<?php echo $descrp; ?>">
				</div>
				<div class="input-group">
					<label>Quantity</label>
					<input type="text" name="quant" value="<?php echo $quant; ?>">
				</div>
				<div class="input-group">
					<?php if ($update == true): ?>
						<button class="btn" type="submit" name="update">Edit</button>
					<?php else: ?>
						<button class="btn" type="submit" name="save">Add</button>
					<?php endif ?>
				</div>
			</form>
		</div>
		<div class="footer">
			<img src="5.png" id="footerlogo">
			<div id="footerContent">
		        <p class="GreenPart">Habla a:</p>
		        <p>Av. Intercomunal, sector la Mora, calle 8</p>
		        <p class="GreenPart"> Telefono:</p>
		        <p>+58 251 261 00 01</p>
		        <p class="GreenPart">Correo:</p>
		        <p>yourmail@gmail.com</p>
		        <i class='fab fa-pinterest' style="padding-right: 11px;"></i>
				<i class='fab fa-facebook-f' style="padding-right: 11px;"></i>
				<i class='fab fa-twitter' style="padding-right: 11px;"></i>
				<i class='fab fa-whatsapp' style="padding-right: 11px;"></i>
				<i class='fab fa-linkedin' style="padding-right: 11px;"></i>
				<i class='fab fa-vimeo-v'></i>
				<p style="opacity: 0.7;">Copyright &copy2020 Todos los derechos reservados | Este sitio esta hecho con &hearts; por DiazApps</p>
			</div>
		</div>
	</div>	
</body>
</html>