<?php
	require_once "../bd/connection.php";
	
	function clean($value = "") {
		$value = trim($value);
		$value = stripslashes($value);
		$value = strip_tags($value);
		$value = htmlspecialchars($value);
		
		return $value;
	}

	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
		
	$sql="INSERT INTO `users` (name,phone,email) VALUES ('$name','$phone', '$email')";
	$sth=$conn->prepare($sql);
	$sth->bindValue(':name', $name);
	$sth->bindValue(':phone', $phone);
	$sth->bindValue(':email', $email);
	$sth->execute();
	
?>