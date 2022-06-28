<center>
<?php
session_start();
include("../db_con.php");
$link=$_SESSION['link'];
$login=$_POST['forgotlogin'];
$_SESSION['loginforg']=$login;

$sql=mysqli_query($link, "SELECT * FROM `users` WHERE `login`='{$login}'");
$row=mysqli_fetch_array($sql);
if($row){
    include('recov.php');
}
else{echo '<p>Произошла  <br>Ошибка: ' . mysqli_error($link) . '</p>';}
?></center>