<?php 

require_once "../bd/connection.php";
	
	function clean($value = "") {
		$value = trim($value);
		$value = stripslashes($value);
		$value = strip_tags($value);
		$value = htmlspecialchars($value);
		
		return $value;
	}

	$title=$_POST['title'];
	$text=$_POST['contentText'];
	$categories=$_POST['categories'];
	$author=$_POST['author'];
	$dateAdd = date("Y-m-d");
		
	$sql="INSERT INTO `posts` (title,text, categories, author, datetime) VALUES ('$title','$text', '$categories', '$author', '$dateAdd')";
	$sth=$conn->prepare($sql);
	$sth->bindValue(':title', $title);
	$sth->bindValue(':text', $text);
	$sth->bindValue(':categories', $categories);
	$sth->bindValue(':author', $author);
	$sth->bindValue(':dateAdd', $dateAdd);
	$sth->execute();

	header('Location: ../admin.php');
?>