<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
session_start();
$idm=$_SESSION['idm'];
$sql=mysqli_query($link, "SELECT * FROM `med/karta`,`pacient` WHERE `id_pac_pacient`=`id_pac`AND `id_pac`='$idm'" );
$dan=$sql->fetch_array();
?>