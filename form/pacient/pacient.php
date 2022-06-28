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
      <input type="text" name="famil" size="40" placeholder="ФИО" maxlength="30"><br><br>
      <input type="text" name="adr" placeholder="Адрес" maxlength="30" ><br><br>
      <input type="text" name="phone" size="40" placeholder="Телефон" maxlength="30"><br><br>
      <input type="text" name="medpolis" size="40" placeholder="Мед. полис" maxlength="30"><br><br>
      
             <select name="numutch">
<option selected value="Участок" disabled>Участок</option>
<?php
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$sql1="SELECT * FROM `uchas`";
 //Если вставка прошла успешно
$result1 = $link->query($sql1);
$row1=mysqli_fetch_array($result1);

 do{?>
  
    <option div="up_yach" value="<?php echo $row1['id'];?>"><?php echo $row1['number'];?></option>
<?php }
while($row1 = mysqli_fetch_array($result1));
?>
</select>
<br><br>

       <select name="spec">
<option selected value="Пол" disabled>Пол</option>
<option  value="Муж" >Муж</option>
<option  value="Жен" >Жен</option>
</select>

      
<br><br>
</select>
   <input type="submit" class="bb1" value="Сохранить"></input>
  </p>
  
  </form>
  
  <br><br>
 </div>
 </center>

   <script>   
$("#musical_bd").validate({
  rules: {
    famil: {
      required: true,
    },
    adr: {
    required: true,
      minlength: 5  
    },
        phone: {
    required: true,
    minlength: 6,  
    },
     medpolis : {
      required: true,
   minlength : 8
    },
 numutch: {
    required: true,
    },
     spec : {
      required: true,
    }
    },
  messages: {
     famil: {
      required: "<br>Поле famil обязательно для заполнения",
    },
  adr: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина адреса должна быть больше 5-ти символов")
  },
  phone: {
    required: "<br>Поле телефон обязательно для заполнения",
     minlength: jQuery.validator.format("<br>Длина телефона должна быть больше 6-ти символов")
    },
  medpolis: {
     required: "<br>Поле мед. полис обязательно для заполнения",
     minlength: jQuery.validator.format("<br>Длина мед. полиса должна быть больше 8-ти символов")
    },
    numutch: {
    required: "<br>Не выбран участок"
    },
    spec: {
    required: "<br>Не выбран пол",
    }
    

  },
   submitHandler: function() {
        var msg   = jQuery('#musical_bd').serialize(); // ID формы
        jQuery.ajax({    
            method: 'POST', // Метод отправки
            url: 'form/pacient/action_ajax_pacient_form.php', // Адрес обработчика
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

