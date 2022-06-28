<center>
<?php 
session_start();
$login=$_POST['forgotlogin'];
$_SESSION['forgotlogin']=$login;
include('../../db_con.php');
$link=$_SESSION['link'];
 $sql="SELECT Count(id) from `users` where (`login` = '{$login}' OR `email` = '{$login}') ";
 $result=mysqli_query($link, $sql);
 $row[]=mysqli_fetch_array($result);

if($result!=FALSE){
    include('recov.php');
}
else{echo '<p>Произошла  <br>Ошибка: ' . mysqli_error($link) . '</p>';}
?>
</center>