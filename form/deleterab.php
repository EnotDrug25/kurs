<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
session_start();
$idm=$_SESSION['idm'];
 $sql = mysqli_query($link,"DELETE FROM `doctor` WHERE `id_doc` = '$idm'");

?>
<script>
            loadpage('main.php');
            
    </script>