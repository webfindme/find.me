<?php
include('index.html');

$conn = mysqli_connect("localhost", "root", "", "findme");
if (!$conn) {
	die('Ошибка: сервер не подключился' . mysqli_error());
}

$result = $conn->query('SELECT * FROM `message`');
while($row = $result->fetch_assoc())
{
	echo '<p>Текст: '.$row['message'].'</p>';
}

?>
