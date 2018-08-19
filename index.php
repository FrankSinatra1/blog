<?php
	require_once "components/head.php";
	require_once "bd/connection.php";
?>

<div class="wrapper-form">
	<div class="popup childPopup">
		<h2>Заполните формы.</h2>
		<p>Мы свяжемся с вами в ближайшее время.</p>
		<form action="components/reg.php" method="post" id="form_formPageIndex">
			<input type="text" class="inputFocus" placeholder="Имя" required="" name="name" id="name">
			<input type="text" class="inputFocus" required="" name="phone" placeholder="Номер телефона" id="phone">
			<input type="email" class="inputFocus" placeholder="Email" required="" name="email" id="email">
			<button type="submit" name="button" class="button buttonreg">Отправить заявку</button>
		</form>
	</div>
</div>

<?php
	require_once "components/footer.php";
?>