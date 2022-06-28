<center>
<?php
session_start();
$_SESSION['surn']=$_POST['surn'];
$_SESSION['name']=$_POST['name'];
$_SESSION['otch']=$_POST['otch'];
$_SESSION['email']=$_POST['email'];
$_SESSION['data']=$_POST['data'];
$_SESSION['login']=$_POST['login'];
$_SESSION['pass']=$_POST['pass'];

$surname = $_SESSION['surn'];
$name =$_SESSION['name'];
$otch =$_SESSION['otch'];
$email =$_SESSION['email'];
$data =$_SESSION['data'];
$login =$_SESSION['login'];
$pass =$_SESSION['pass'];
$admin=0;
$black=0;

include('../../db_con.php');
$link=$_SESSION['link'];

//ЗАПИСЬ ДАННЫХ В БАЗУ
$sql = mysqli_query($link, "INSERT INTO `users` (`surname`, `name`,`patronimyc`,`email`,`birthday`,`login`,`password`,`admin`, `blacklist`) VALUES ('{$surname}', '{$name}', '{$otch}', '{$email}', '{$data}', '{$login}', '{$pass}', '{$admin}', '{$black}')");
    //Если вставка прошла успешно
    if ($sql) {
    
      echo '<p>Данные успешно добавлены в таблицу.</p><br>

      <input type="submit" id="aftergoodreg" value="Готово">';
     }
else {
      echo 'Ошибка: такой логин уже существует или к этой почте уже привязан аккаунт'.mysqli_error($link);
      
  echo'<br><input type="submit" id="afterbadreg" value="Назад">';}


?>

<script>  
    $(document).ready(function(){  
      
        $('#afterbadreg').click(function(){  
            $.ajax({  
                url: "reg/main.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
<script>  
    $(document).ready(function(){  
      
        $('#aftergoodreg').click(function(){  
            $.ajax({  
                url: "index.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
</center>