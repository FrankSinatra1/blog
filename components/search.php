<?php 
require_once "../bd/connection.php"; // подключение к базе возращает переменную conn с ней и работаем
if(isset($_GET['search_param'])) // если есть параметр гет с таки мназванием то выполняем следующее
{
	$search_param = $_GET['search_param']; // для удобства заносим в переменную
	$query = $conn->query("SELECT * FROM posts WHERE title LIKE '%$search_param%'");
	// получить всё из постс если тайтл содержит в себе гет параметр
	// в двойных ковычках обязательно писать сам запрос
	// в одианрых ковычках писать %переменная%

	echo json_encode($query->fetchAll());
	// fetchAll означает пересобрать запрос в нормальный читаемый результат чтоб с ним можно было работать. В скобках мы указали что нужно получить все записи. не знаю как это работает я гуглил)) и ты тоже гугли 
	// json_encode означает пересобрать массив в строку чтоб работать с ним дальше в джс
	// всегда джсу возвращай ответ в виде джсон
	// сейчас ты делаешь эхо джсон потому что нет ооп когда будут функции будешь писать return вместо эхо но это одно и тоже для джса.
}

?>