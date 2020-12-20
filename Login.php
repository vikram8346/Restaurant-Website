<?php  
 require('dbconnection.php');

if (isset($_POST['email']) and isset($_POST['psw'])){
	
$email = $_POST['email'];
$password = $_POST['psw'];

$query = "SELECT * FROM `users` WHERE email='$email' and pswrd='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "<script type='text/javascript'>alert('Login Successful')</script>";
header("Location: adminpage.php");

}else{
echo "<script type='text/javascript'>alert('Invalid Email or Password')</script>";
}
}
?>