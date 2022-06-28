<?php
$login=$_POST['login'];
$pass=$_POST['pass'];




// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'registration'; // Имя БД
$link=mysqli_connect($db_host, $db_user, $db_password, $db_base);
mysqli_query($link,"SET NAMES 'utf8';"); 
mysqli_query($link,"SET CHARACTER SET 'utf8';"); 
mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci';");
try {
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("set names utf8");
} catch (PDOException $e) {
    // Если есть ошибка соединения, выводим её
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}


/*ПРОВЕРКА УНИКАЛЬНОСТИ ДАННЫХ*/
$result = $link->query("SELECT login FROM users");

  $res = array();
  while($row = mysqli_fetch_row($result))
  $res[] = $row[0];
  if (in_array($login,$res)){
    //include('../main.php');
      echo "Неправильный логин или пароль";break;
  } else{
header('Location: https://vk.com');
  };
?>
<script> 
    $(document).ready(function(){ 
        $('#btnmain').click(function(){  
             $.ajax({  
                url: "",  
                cache: false,  
                success: function(html){  
                    location.reload();  
                }  
            });  
        });           
    });  

    </script>  