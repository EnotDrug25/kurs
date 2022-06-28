<?php 
include 'dann.php';
echo '
<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>
<center>
    <p>Редактирование музыканта</p>
<form id="update_music" action="javascript:void(null);" onsubmit="musical_update()">
<input type="text" id= "zfamil" name="zfamil" placeholder= "Фамилия" value='. $dan['FIO'].'><br><br>
<input type="text" id= "zadr" name="zadr" placeholder="Адрес" value='. $dan['adres'].'><br><br>
<input type="text" id= "zphone" name="zphone" placeholder="Телефон" value='. $dan['phone'].'><br><br>
<input type="text" id= "zmed" name="zmed" placeholder="Полис" value='. $dan['med polis'].'><br><br>
<input type="text" id= "znum" name="znum" placeholder="Участок" value='. $dan['number_uchas'].'><br><br>
';
?>

<select id="viv" name="viv" class="table-bord2" >
<option selected value="Пол" disabled>Пол</option>
<option  value="Муж" >Муж</option>
<option  value="Жен" >Жен</option>
</select>




<br><br>
<!--<select id="ans" name="ans" class="table-bord2" >
<option value="<?php echo $dan['id'] ?>" style='display: none;'><?php echo $dan['aname'] ?></option>
<?php
/*include 'C:/wamp64/www/T8/BD/ajax/bd.php';
$sql1="SELECT * FROM `ansamble`";
 //Если вставка прошла успешно
$result1 = $link->query($sql1);
$row1=mysqli_fetch_array($result1);
 do{?>
    <option value="<?php echo $row1['id'];?>"><?php echo $row1['aname'];?></option>
<?php }
while($row1 = mysqli_fetch_array($result1));*/
?>
</select>
-->


<br><br>
<input type="submit" class="bb1" value="Сохранить">
<input type="button" class="bb1" value="Назад" onclick="loadpage('form/pacient/vivod_pacient.php')">
</form>
</center>
</div>
</center>


 <script>   

    function musical_update()  { 
        var msg   = jQuery('#update_music').serialize(); // ID формы
        jQuery.ajax({    
            method: 'POST', // Метод отправки
            url: 'form/pacient/izmen_update.php', // Адрес обработчика
            beforeSend: function(){
                jQuery('#content').html('Отправляю...'); // Промежуточный статус
            },
        data: msg,
        cache: false,  
        success: function(html){  
    jQuery('#content').html(html);  }  
    }); } // Вывод ответа

</script> 