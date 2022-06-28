<center>
<?php

$a=$_POST['name'];
$b=$_POST['country'];
$c=$_POST['count'];
$d=$_POST['boss'];

include 'C:/wamp64/www/T8/BD/ajax/bd.php';


  $sql = mysqli_query($link, "INSERT INTO `ansamble` (`name`,`country`,`count`,`boss`) VALUES ('{$a}', '{$b}', '{$c}', '{$d}')");
    //Если вставка прошла успешно
if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p><br>
      <input type="submit" class="regis" id="aftergoodansam" value="Готово" >';
    } 

    else {
 echo '<p>Ошибка:Почта либо логин повторяются</p><br>
      <input type="submit" class="regis" id="afterbadansam" value="Назад" >'.mysqli_error($link);
    }

?>
<script>  
    $(document).ready(function(){        
        $('#aftergoodansam').click(function(){  
            $.ajax({  
                url: "form/ansam/ansam.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
     $(document).ready(function(){        
        $('#afterbadansam').click(function(){  
            $.ajax({  
                url: "form/ansam/ansam.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
</center>