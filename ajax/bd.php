<?php
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'practica-19-2'; // Имя БД
$link=mysqli_connect($db_host, $db_user, $db_password, $db_base);
mysqli_query($link,"SET NAMES 'utf8';"); 
mysqli_query($link,"SET CHARACTER SET 'utf8';"); 
mysqli_query($link,"SET SESSION collation_connection = 'utf8_unicode_ci';");
try {
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("set names utf8");
} catch (PDOException $e) {
    // Если есть  <br>Ошибка соединения, выводим её
    print " <br>Ошибка!: " . $e->getMessage() . "<br/>";
}
?>