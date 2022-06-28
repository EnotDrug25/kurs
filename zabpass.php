<?php

session_start();

if (isset($_POST["login"])) { 
	// Формируем массив для html ответа
$_SESSION['login']=$_POST['login'];

$login=$_SESSION['login'];

include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$sql = mysqli_query($link, "SELECT * FROM `users` WHERE login= '$login'");
  if ($sql->num_rows > 0) {
    ?>
    <center>
<div class="zabpass wrapper" id="border" style="margin-top:30px"><br><br>
 <?php
    $row = $sql->fetch_assoc();
     echo 'Эта личная страница ' .$row["Famil"]. ' ' .$row["Name"]. ' ' .$row["Otch"] ;
      ?><br>
      <?php
     echo 'Это вы ?';
     ?><br>
      <input type="button"  class="regis" value="Да" onclick="loadpage('smena.php')">
      <input type="button"  class="regis" value="Повторить ввод" onclick="loadpage('losepass.php')">
</div>
    <?php
  }
  else{
    ?>
<div class="zabpass wrapper" id="border" style="margin-top:30px"><br><br>
     <?php
  echo "Введён неверный логин"; 
 ?>
      <input type="button"  class="regis" value="Назад" onclick="loadpage('join.php')">
</div>
</center>
 <?php
  }
}

?>