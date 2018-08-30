<?php 
	require_once "bd/connection.php";

	$query = $conn->query('SELECT * FROM posts');
	echo json_encode($query->fetchAll());
?>