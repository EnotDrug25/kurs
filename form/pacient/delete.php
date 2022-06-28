<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
session_start();
$idm=$_SESSION['idm'];
 $sql = mysqli_query($link,"DELETE FROM `pacient` WHERE `id_pac` = '$idm'");

?>
<script>
            loadpage('vivod_pacient.php');
            
    </script>