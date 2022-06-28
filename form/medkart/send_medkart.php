<center>
<?php

$a=$_POST['begin'];
$b=$_POST['diag'];
$c=$_POST['pac'];

include 'C:/wamp64/www/medT8/BD/ajax/bd.php';


  $sql = mysqli_query($link, "INSERT INTO `med/karta` (`begin`,`Diagnoz`,`id_pac_pacient`) VALUES ('{$a}','{$b}', '{$c}')");
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
                url: "medkart.php",  
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
                url: "medkart.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
</center>