<?php
	$message = $_POST['message'];

	$message = htmlspecialchars($message);
	$conn = mysqli_connect("localhost", "root", "", "findme");
	if (isset($message)) {
    $sql = mysqli_query($conn, "INSERT INTO `message` VALUES ('{$message}')");
    if ($sql) {
      echo '<p>Сообщение отправлено!</p>';
    } 
    else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>