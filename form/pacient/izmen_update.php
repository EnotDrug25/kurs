<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>
<?php

session_start();

if (isset($_POST["zfamil"])) { 
	// Формируем массив для html ответа
$zadr=$_POST['zadr'];
$zfamil=$_POST['zfamil'];
$zphone=$_POST['zphone'];
$zjobb=$_POST['viv'];
$zmed=$_POST['zmed'];
$znum=$_POST['znum'];
$idm=$_SESSION['idm'];
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';

$sql = mysqli_query($link, "UPDATE `pacient` SET `FIO`='{$zfamil}', `gender`='{$zjobb}', `adres`='{$zadr}', `phone`='{$zphone}',`med polis`='{$zmed}' , `number_uchas`='{$znum}' WHERE `id_pac`='{$idm}' ");

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
                url: "form/pacient/izmen_chel.php",  
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
                url: "form/pacient/izmen_chel.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>
