<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
session_start();
$idm=$_POST['idm'];
$_SESSION['idm']=$idm;
$sql=mysqli_query($link, "SELECT * FROM `doctor`where `id_doc`='{$idm}' " );
$result = mysqli_fetch_array($sql);

echo '
<center>
<div class="doc-bord" id="border" style="margin-top:30px"><br>
<center>
    <p>Редактирование музыканта</p>
<form id="update_music" action="javascript:void(null);" onsubmit="musical_update()">
<input type="text" id= "Famil_doc" name="Famil_doc" placeholder= "Фамилия" value='. $result['Famil_doc'].'><br><br>
<input type="text" id= "Name_doc" name="Name_doc" placeholder="Адрес" value='. $result['Name_doc'].'><br><br>
<input type="text" id= "Otch_doc" name="Otch_doc" placeholder="Телефон" value='. $result['Otch_doc'].'><br><br>
<input type="text" id= "profession" name="profession" placeholder="Полис" value='. $result['profession'].'><br><br>
<input type="text" id= "cab" name="cab" placeholder="Участок" value='. $result['cab'].'><br><br>
<input type="text" id= "num_uch_uchastok" name="num_uch_uchastok" placeholder="Участок" value='. $result['num_uch_uchastok'].'><br><br>
<input type="text" id= "work" name="work" placeholder="Время работы" value='. $result['work'].'><br><br>
';
?>

<br><br>

<br><br>
<input type="submit" class="bb1" value="Сохранить">
<?php
         echo"  <input type='button' class='bb1 delete' name=" . $result['id_doc'] . " id=" . $result['id_doc'] . " value='Удалить'>";
?>
<input type="button" style="margin-left: 5px"class="bb1" value="Назад" onclick="loadpage('form/RabTime.php')">
</form>
</center>
</div>
</center>


 <script>   

    function musical_update()  { 
        var msg   = jQuery('#update_music').serialize(); // ID формы
        jQuery.ajax({    
            method: 'POST', // Метод отправки
            url: 'form/updaterab.php', // Адрес обработчика
            beforeSend: function(){
                jQuery('#content').html('Отправляю...'); // Промежуточный статус
            },
        data: msg,
        cache: false,  
        success: function(html){  
    jQuery('#content').html(html);  }  
    }); } // Вывод ответа

$('.delete').click(function(){     
    idm=$(this).attr('id');
    });
        $('.delete').click(function(){  
                $.post('form/deleterab.php', {idm: idm}, function(html){
                $("#content").html(html);
                });
         });



</script>