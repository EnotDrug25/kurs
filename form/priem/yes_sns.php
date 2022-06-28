<center><div class="priem-bord2" id="border"><br><br>
<form method="post" id="priem_zap"  action="javascript:void(null);" onsubmit="priem_zap()">
<p>Запись</p>

                                    <select name="doc" class="table-bord2 sinselect" >
            <option selected value="Выбор специальности" disabled>Выбор специальности</option>
            <?php
            include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
            $sql1="SELECT * FROM `doctor`";
             //Если вставка прошла успешно
            $result1 = $link->query($sql1);
            $row1=mysqli_fetch_array($result1);
             do{?>
                <option value="<?php echo $row1['profession'];?>"><?php echo $row1['profession'];?></option>
            <?php }
            while($row1 = mysqli_fetch_array($result1));
            ?>
            </select><br><br>


<button class="priem"  onclick="loadpage('yes.php')">Записаться</button>
</div>
</form>
</center>
<br><br>


 <script>   
$("#priem_zap").validate({
  rules: {
    doc: {
    required: true
    }
    },
  messages: {
  doc: {
    required: "<br>Выберете доктора"
  }
  },
   submitHandler: function() {
        var msg   = jQuery('#priem_zap').serialize(); // ID формы
        jQuery.ajax({
            method: 'POST', // Метод отправки
            url: 'form/priem/priem_zapis.php', // Адрес обработчика
            beforeSend: function(){
                jQuery('#content').html('Отправляю...'); // Промежуточный статус
            },
        data: msg,
        cache: false,
        success: function(html){
    jQuery('#content').html(html);  }
    });
  }
});

$(document).ready(function(){
        $('.sinselect').change(function(){
        idx=$(this).val();
        $.post('form/priem/peresil.php', {idx:idx}, function(html){$('#content').html(html)
        });
        });
});

</script> 