<?php 
	require_once "components/head.php";
	require_once "bd/connection.php";
?>


<div class="wrapper-adminpanel flex">
	<form action="components/addpost.php" id="addForm-admin" method="post">
		<div class="wpap-input-admin">
			<h2>Заголовок</h2>
			<input type="text" class="inputFocus" placeholder="Заголовок" name="title">
		</div>
		<div class="wpap-input-admin">
			<h2>Содержание</h2>
			<textarea name="contentText" id="" class="inputFocus" placeholder="Содержание"></textarea>
		</div>
		<div class="wpap-input-admin">
			<h2>Категория</h2>
			<select name="categories" id="">
				<option value="Политика">Политика</option>
				<option value="Еда">Еда</option>
				<option value="Музыка">Музыка</option>
				<option value="Спорт">Спорт</option>
				<option value="Технологии">Технологии</option>
				<option value="Ого как важно">Ого как важно</option>
			</select>
		</div>
		<div class="wpap-input-admin">
			<h2>Автор</h2>
			<input type="text" class="inputFocus" placeholder="Автор" name="author">
		</div>
		<button type="submit" class="button">
			Добавить статью
		</button>
	</form>
</div>


<?php 
	require_once "components/footer.php";
?>