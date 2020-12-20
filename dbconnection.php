<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'nxp9797_WebDM');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$id = 0;
$name = "";
$descrp = "";
$quant= "";
$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$descrp = $_POST['descrp'];
		$quant = $_POST['quant'];

		mysqli_query($connection, "INSERT INTO burgers (name, descrp, quant) VALUES ('$name', '$descrp', '$quant')");
		header('location: adminpage.php');
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$descrp = $_POST['descrp'];
		$quant = $_POST['quant'];

		mysqli_query($connection, "UPDATE burgers SET name='$name', descrp='$descrp', quant='$quant' WHERE id=$id");
		header('location: adminpage.php');
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($connection, "SELECT * FROM burgers WHERE id=$id");

		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$descrp = $n['descrp'];
			$quant = $n['quant'];
		}
	}

	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($connection, "DELETE FROM burgers WHERE id=$id");
	header('location: adminpage.php');
}
?>