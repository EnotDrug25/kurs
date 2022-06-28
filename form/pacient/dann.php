<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
session_start();
$idm=$_SESSION['idm'];
$sql=mysqli_query($link, "SELECT * FROM `pacient` WHERE `id_pac`='$idm'" );
$dan=mysqli_fetch_array($sql);
?>