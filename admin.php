<?php 
	require_once "components/head.php";
	require_once "bd/connection.php";
?>


<div class="wrapper-adminpanel flex">
	<form action="components/addpost.php" enctype="multipart/form-data" id="addForm-admin" method="post">
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
				<option value="1">Политика</option>
				<option value="2">Еда</option>
				<option value="3">Музыка</option>
				<option value="4">Спорт</option>
				<option value="5">Технологии</option>
				<option value="6">Ого как важно</option>
			</select>
		</div>
		<div class="wpap-input-admin">
			<h2>Автор</h2>
			<input type="text" class="inputFocus" placeholder="Автор" name="author">
		</div>
		<div class="wrpap-input-img">
			<input type="text" name="etc" value="">
			<input name="imgfile" type="file" />
		</div>
		<button type="submit" class="button">
			Добавить статью
		</button>
	</form>
</div>


<?php 
	require_once "components/footer.php";
?>