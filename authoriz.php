<?php
	require_once "components/head.php";
	require_once "bd/connection.php";
?>

<div class="wrapper-form">
	<div class="popup childPopup">
		<h2>Авторизация</h2>
		<p>Мы свяжемся с вами в ближайшее время.</p>
		<form action="components/auth.php" method="post" id="">
			<input type="text" class="inputFocus" placeholder="Имя" required="" name="name" id="name">
			<input type="email" class="inputFocus" placeholder="Email" required="" name="email" id="email">
			<button type="submit" name="button" class="button">Авторизоваться</button>
		</form>
		<a href="index.php">Регистрация</a>
	</div>
</div>

<?php
	require_once "components/footer.php";
?>