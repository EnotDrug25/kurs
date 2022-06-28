<center>
<?php

$a=$_POST['famil'];
$b=$_POST['adr'];
$c=$_POST['phone'];
$d=$_POST['medpolis'];
$e=$_POST['numutch'];
$f=$_POST['spec'];

include 'C:/wamp64/www/medT8/BD/ajax/bd.php';


  $sql = mysqli_query($link, "INSERT INTO `pacient` (`FIO`,`gender`,`adres`,`phone`,`med polis`,`number_uchas`) VALUES ('{$a}', '{$f}', '{$b}', '{$c}', '{$d}', '{$e}')");
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
                url: "pacient.php",  
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
                url: "pacient.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
</center>