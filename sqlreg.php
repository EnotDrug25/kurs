<center>
<?php
session_start();
$a=$_POST['fio'];
$b=$_POST['name'];
$c=$_POST['otch'];
$i=$_POST['gender'];
$x=$_POST['uch'];
$e=$_POST['data'];
$f=$_POST['login'];
$g=$_POST['password'];
$n=$_POST['sns'];
$z=0;


include 'C:/wamp64/www/medT8/BD/ajax/bd.php';


  $sql = mysqli_query($link, "INSERT INTO `pacient` (`Famil_pac`,`Name_pac`,`Otch_pac`,`gender_gender`,`uch`,`birthday`,`snils`) VALUES ('{$a}', '{$b}', '{$c}', '{$i}', '{$x}', '{$e}','{$n}')");
    //Если вставка прошла успешно
if ($sql) {
    $sql2 = mysqli_query($link, "INSERT INTO `users` (`Famil`,`Name`,`Otch`,`snils`,`password`,`login`,`admin`) VALUES ('{$a}', '{$b}', '{$c}', '{$n}', '{$g}', '{$f}','{$z}')");
      echo '<p>Данные успешно добавлены в таблицу.</p><br>
      <input type="submit" class="regis" id="aftergoodreg" value="Готово" >';
    } 

    else {
 echo '<p>Ошибка:Почта либо логин повторяются</p><br>
      <input type="submit" class="regis" id="afterbadreg" value="Назад" >'.mysqli_error($link);
    }


?>
<script>  
    $(document).ready(function(){        
        $('#aftergoodreg').click(function(){  
            $.ajax({  
                url: "osnova.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
     $(document).ready(function(){        
        $('#afterbadreg').click(function(){  
            $.ajax({  
                url: "osnova.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
</center>