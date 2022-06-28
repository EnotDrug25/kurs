<center>
<?php 
session_start();
$string=$_SESSION['string'];
if(isset($_POST['newpass1']) and isset($_POST['newpass2'])){
  $newpass1=$_POST['newpass1'];$newpass2=$_POST['newpass2'];
  if($newpass1==$newpass2){
    $string=$newpass1;
  }
  else{echo "Пароли не совпадают";}
}

    include('../../db_con.php');
    $link=$_SESSION['link'];
    $login=$_SESSION['forgotlogin'];
    $sql=mysqli_query($link, "UPDATE `users`  SET `password`='{$string}' WHERE (`login` = '{$login}' OR `email` = '{$login}')");
    if($sql){
    echo "<br>Все прошло успешно<br><br>
    <button class='regbutton' id='back2main'>На главную</button>
    ";
}
else{echo '<p>Произошла  <br>Ошибка: ' . mysqli_error($link) . '</p>';}
?>
</center>
<script type="text/javascript" src="js/forgetsends.js"></script>