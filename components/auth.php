<?php 

	require_once "../bd/connection.php";


	session_start();

	if (isset($_POST['name']) && isset($_POST['email'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];

		$query = $conn->query("SELECT * FROM users WHERE name='$name' and email='$email'");

	}
?>