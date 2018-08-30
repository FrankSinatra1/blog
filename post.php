<?php
	
	require_once 'bd/connection.php';
if(isset($_GET['id'])){
	$news = $conn->query("SELECT * 
		FROM posts as P   
		JOIN categories as C ON P.categories = C.id
		WHERE P.id = '".$_GET['id']."'");
	// 'as' означает занести в переменную... т.е. дальше обращаться к таблице сможешь через переменную P ок после идёт подключение через джоин оно просот подключит категорию и занесёт её в переменную С ЕСЛИ категори_айди равен айди категории.
	$news = $news->fetch();// fetch преобразует одну запись в массив у нас по запросу всегда одна запись так что нормас
}else{
	header('Location: http://learn/blog.php');
}
	require_once "components/head.php";
	require_once "components/header.php";
?>


<div class="wrapper-our-post flex">
	<div class="our-post__title">
		<p><?php echo $news['title'] ?></p>
	</div>

	<div class="our-post__text">
		<p><?php echo $news['text'] ?></p>
	</div>

	<div class="our-post__date-author flex">
		<div class="date-publish">
			<p><?php echo $news['datetime'] ?></p>
		</div>
		<div class="author">
			<p><?php echo $news['author'] ?></p>
		</div>
	</div>
</div>

<?php

		$idPost = $_GET['id'];
		$viewPost = $news['view'];
		$viewPost = $viewPost+1;

		$sql="UPDATE `posts` SET `view` = '".$viewPost."' WHERE `id` = '".$idPost."'";
		$sth=$conn->prepare($sql);
		$sth->bindValue(':view', $view);
		$sth->execute();

	require_once "components/footer.php";
?>