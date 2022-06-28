<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>
<?php

session_start();

if (isset($_POST["Famil_doc"])) { 
   // Формируем массив для html ответа
$Famil_doc=$_POST['Famil_doc'];
$Name_doc=$_POST['Name_doc'];
$Otch_doc=$_POST['Otch_doc'];
$profession=$_POST['profession'];
$cab=$_POST['cab'];
$num_uch_uchastok=$_POST['num_uch_uchastok'];
$work=$_POST['work'];
$idm=$_SESSION['idm'];
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';

$sql = mysqli_query($link, "UPDATE `doctor` SET `Famil_doc`='{$Famil_doc}', `Name_doc`='{$Name_doc}', `Otch_doc`='{$Otch_doc}', `profession`='{$profession}',`cab`='{$cab}' , `num_uch_uchastok`='{$num_uch_uchastok}',`work`='{$work}' WHERE `id_doc`='{$idm}' ");

if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p><br>';
      echo '<input type="button" class="bb1" id="aftergoodmus" value="Назад">';
    } 

    else {
 echo '<p>Ошибка:Данные не отправлены</p><br>';
 echo '<input type="button" class="bb1" id="afterbadmus" value="Назад">';
    }

}
?>
</div>
</center>
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
</script>
