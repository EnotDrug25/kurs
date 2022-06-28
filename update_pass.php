<?php

session_start();

if (isset($_POST["zamena_pass"])) { 
	// Формируем массив для html ответа
$zamena_pass=$_POST['zamena_pass'];
$login=$_SESSION['login'];

include 'C:/wamp64/www/medT8/BD/ajax/bd.php';

$sql = mysqli_query($link, "UPDATE `users` SET `password`='{$zamena_pass}' WHERE `login`='{$login}'");

echo '<script >
  loadpage("join.php");
</script>';


}

?>