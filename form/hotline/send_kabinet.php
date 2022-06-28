<center>
<?php

$a=$_POST['xbegin'];
$b=$_POST['simpt'];
$c=$_POST['pac'];

include 'C:/wamp64/www/medT8/BD/ajax/bd.php';


  $sql = mysqli_query($link, "INSERT INTO `hotline` (`date of call`,`simptoms`,`id_pac_pacient`) VALUES ('{$a}','{$b}', '{$c}')");
    //Если вставка прошла успешно
if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p><br>';
    } 

    else {
 echo '<p>Ошибка:Данные не отправлены</p><br>';
    }

?>
<script>  
    $(document).ready(function(){        
        $('#aftergoodmus').click(function(){  
            $.ajax({  
                url: "kabinet.php",  
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
                url: "kabinet.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
</center>