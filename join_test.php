<?php
if (isset($_POST["login_join"]) && isset($_POST["password_join"]) ) { 
	// Формируем массив для html ответа
$login_join=$_POST['login_join'];
$pass_join=$_POST['password_join'];
$pt=gettype($pass_join);

include 'C:/wamp64/www/T8/BD/ajax/bd.php';
$sql = mysqli_query($link, "SELECT * FROM `reg` WHERE Login= '$login_join' AND Password = '$pass_join' ");
$sql2 = mysqli_query($link, "SELECT * FROM `lvl` WHERE admin= '$login_join'");
  if ($sql->num_rows > 0) {
            ?>
                    <center>
                <div class="registr-bord wrapper" id="border" style="margin-top:30px"><br>
            <?php
                    $row = $sql->fetch_assoc();
                     echo 'Эта личная страница ' .$row["Surename"]. ' ' .$row["Name"]. ' ' .$row["Lastname"] . '<br>' . 'Добро пожаловать'.'<br>';
            ?>
                      <input type="button"  class="regis" value="Войти" onclick="loadpage('main.php')">
               
            <?php
            if($sql2->num_rows > 0){
        ?>
        <input type="button"  class="regis" value="Данные" onclick="loadpage('ne_dlya_users.php')"> </div>
        <?php
    }
                  }
                  else{
            ?>
                    <center>
                <div class="registr-bord wrapper" id="border" style="margin-top:30px"><br><br>
            <?php
                  echo "Введены неправильный пароль либо логин"; 
            ?>
                      <input type="button"  class="regis" value="Назад" onclick="loadpage('join.php')">
                </div>
                

 <?php
  }
}
?>