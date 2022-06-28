<center>
<?php
session_start();

if (empty($_SESSION['auth']) or $_SESSION['auth'] == false) {
    }
else{
$login = $_COOKIE['login'];

$b=$_POST['idx'];
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$sql1=mysqli_query($link, "SELECT `snils` FROM `users`  WHERE `login`='{$login}'");
$bet=mysqli_fetch_array($sql1);
$idm=$bet['snils'];
$sql2=mysqli_query($link, "SELECT `id_pac` FROM `pacient`  WHERE `snils`='{$idm}'");
$a=mysqli_fetch_array($sql2);
$a=$a['id_pac'];
$sql3=mysqli_query($link, "SELECT `cab` FROM `doctor`  WHERE `id_doc`='{$b}'");
$c=mysqli_fetch_array($sql3);
$c=$c['cab'];
  $sql4 = mysqli_query($link, "INSERT INTO `priem` (`id_pac`,`id_doc`,`cab`) VALUES ('{$a}', '{$b}', '{$c}')");
    //Если вставка прошла успешно
if ($sql4) {
      echo '<a><div class="priem-zap">Данные успешно добавлены в таблицу.</a><br><br>';
     ?>
     <button class="bb1" onclick="loadpage('main.php')"><div class="text-join">Главная</div></button>
     <?php
      echo'</div>';
    } 

    else {
 echo '<p><div class="priem-zap">Ошибка:Данные не отправлены</p><br></div>';
    }

?>
<script>  
    $(document).ready(function(){        
        $('#aftergoodmus').click(function(){  
            $.ajax({  
                url: "main.php",
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
     $(document).ready(function(){        
        $('#afterbadmus').click(function(){  
            $.ajax({  
                url: "main.php",
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
 <?php
 }
 ?>
</script>
</center>