<?php 
include 'dann.php';
echo '
<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>
<center>
    <p>Редактирование музыканта</p>
<form id="update_music" action="javascript:void(null);" onsubmit="musical_update()">
<input type="text" id= "zbegin" name="zbegin" placeholder= "Дата посещения" value='. $dan['begin'].'><br><br>
<input type="text" id= "zdiag" name="zdiag" placeholder="Диагноз" value='. $dan['Diagnoz'].'><br><br>
<input type="text" id= "zfio" name="zfio" placeholder="Пициент" value='. $dan['FIO'].'><br><br>

';
?>
<!--<select id="ans" name="ans" class="table-bord2" >
<option value="<?php// echo $dan['id'] ?>" style='display: none;'><?php// echo $dan['aname'] ?></option>
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
<input type="button" class="bb1" value="Назад" onclick="loadpage('form/medkart/vivod_pacient.php')">
</form>
</center>
</div>
</center>


 <script>   

    function musical_update()  { 
        var msg   = jQuery('#update_music').serialize(); // ID формы
        jQuery.ajax({    
            method: 'POST', // Метод отправки
            url: 'form/medkart/izmen_update.php', // Адрес обработчика
            beforeSend: function(){
                jQuery('#content').html('Отправляю...'); // Промежуточный статус
            },
        data: msg,
        cache: false,  
        success: function(html){  
    jQuery('#content').html(html);  }  
    }); } // Вывод ответа

</script> 