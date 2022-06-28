<center>
<?php
session_start();
$a=$_POST['fio'];
$b=$_POST['name'];
$c=$_POST['otch'];
$i=$_POST['gender'];
$x=$_POST['uch'];
$g=$_POST['prof'];


include 'C:/wamp64/www/medT8/BD/ajax/bd.php';


  $sql = mysqli_query($link, "INSERT INTO `doctor` (`Famil_doc`,`Name_doc`,`Otch_doc`,`gender_gender`,`num_uch_uchastok`,`profession`) VALUES ('{$a}', '{$b}', '{$c}', '{$i}', '{$x}','{$g}')");
    //Если вставка прошла успешно
if ($sql) {
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