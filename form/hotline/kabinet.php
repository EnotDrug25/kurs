<div class="border">
	 <div class="wrapper">
 <form method="post">
   <input type="button" class="nach" value="СПРАВОЧНИК" onclick="loadpage('form/formRab.php')">
</div>
<center><div class="border2" id="border" style="margin-top:30px">
<br><br>
<form method="post" id="ajax_form"  action="">
</form>
  <form method="post" id="musical_bd"  action="javascript:void(null);" onsubmit="musical_bd()">
  <p><b>Введите значения</b><br>
      <input type="date" name="xbegin" size="40" placeholder="Дата звонка" maxlength="30"><br><br>
      <input type="text" name="simpt" placeholder="Симптомы" maxlength="50" ><br><br>
      
       <select name="pac">
<option selected value="Пациент" disabled>Пациент</option>
<?php
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$sql1="SELECT * FROM `pacient`";
 //Если вставка прошла успешно
$result1 = $link->query($sql1);
$row1=mysqli_fetch_array($result1);

 do{?>
  
    <option div="up_yach" value="<?php echo $row1['id_pac'];?>"><?php echo $row1['FIO'];?></option>
<?php }
while($row1 = mysqli_fetch_array($result1));
?>
</select>
<br><br>
   <input type="submit" class="bb1" value="Сохранить"></input>
  </p>
  
  </form>
  
  <br><br>
 </div>
 </center>

   <script>   
$("#musical_bd").validate({
  rules: {
    begin: {
      required: true,
    },
    diag: {
    required: true,
      minlength: 5,
      maxlength: 100  
    },
        pac: {
    required: true,
    }
    },
  messages: {
     xbegin: {
      required: "<br>Пожалуйста укажите дату посещения",
    },
  simpt: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 5-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 100-ни символов")
  },
  pac: {
    required: "<br>Выбирите пациента",
    }
    

  },
   submitHandler: function() {
        var msg   = jQuery('#musical_bd').serialize(); // ID формы
        jQuery.ajax({    
            method: 'POST', // Метод отправки
            url: 'form/hotline/action_ajax_kabinet_form.php', // Адрес обработчика
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


    function up_table() {
 alert("Hello");
// Код проверки      
}

</script> 

