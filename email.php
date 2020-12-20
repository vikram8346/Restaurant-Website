<?php
if(!isset($message)) {
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	$query = "SELECT * FROM register where email = '" . $_POST["Email"] . "'";
	$count = $db_handle->numRows($query);
	
	if($count==0) {
		$query = "INSERT INTO register (Name, Email, Psw, Rpsw) VALUES
		('" . $_POST["Name"] . "', '" . $_POST["Email"] . "', '" . md5($_POST["Psw"]) . "', '" . md5($_POST["Rpsw"]) . "')";
		$current_id = $db_handle->insertQuery($query);
		if(!empty($current_id)) {
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=" . $current_id;
			$toEmail = $_POST["Email"];
			$subject = "User Registration Activation Email";
			$content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";
			$mailHeaders = "From: Admin\r\n";
			if(mail($toEmail, $subject, $content, $mailHeaders)) {
				$message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";	
				$type = "success";
			}
			unset($_POST);
		} else {
			$message = "Problem in registration. Try Again!";	
		}
	} else {
		$message = "User Email is already in use.";	
		$type = "error";
	}
}
?>