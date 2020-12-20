<?php
 
$name = $_POST['name'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$rpsw = $_POST['rpsw'];



if (!empty($name) || !empty($psw) || !empty($rpsw) || !empty($email)) {
 $host = "localhost";
    $dbUsername = "nxp9797_patenihar7";
    $dbPassword = "Nihar.25736250";
    $dbname = "nxp9797_WebDM";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (name, email, psw, rpsw) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $name, $email, $psw, $rpsw);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone has already registered using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
