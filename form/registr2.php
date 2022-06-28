<center><div class="registr-bord" id="border"><br><br>
<p>Регистрация</p>
	 <div class="wrapper">
 <form id="musical_bd2"  action="javascript:void(null);" method="POST" onsubmit="musical_bd2()">

    <input type="text" class="FirUp" id="fio" name="fio" placeholder="Фамилия"><br><br>

	<input type="text" class="FirUp" id="name" name="name" placeholder="Имя" ><br><br>

	<input type="text" class="FirUp" id="otch" name="otch" placeholder="Отчество" ><br><br>

                           <select name="gender">
                    <option selected value="Пол" disabled>Пол</option>
                    <?php
                    include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
                    $sql1="SELECT * FROM `gender`";
                     //Если вставка прошла успешно
                    $result1 = $link->query($sql1);
                    $row1=mysqli_fetch_array($result1);

                     do{?>

                        <option div="up_yach" value="<?php echo $row1['gender'];?>"><?php echo $row1['gender'];?></option>
                    <?php }
                    while($row1 = mysqli_fetch_array($result1));
                    ?>
                    </select><br><br>

                        <select name="uch">
                    <option selected value="Участок" disabled>Участок</option>
                    <?php
                    include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
                    $sql1="SELECT * FROM `uchastok`";
                     //Если вставка прошла успешно
                    $result1 = $link->query($sql1);
                    $row1=mysqli_fetch_array($result1);

                     do{?>

                        <option div="up_yach" value="<?php echo $row1['id_uch'];?>"><?php echo $row1['num_uch'];?></option>
                    <?php }
                    while($row1 = mysqli_fetch_array($result1));
                    ?>
                    </select><br><br>

	<input type="text" id="prof" name="prof" placeholder="Профессия" ><br><br>

   <input type="submit" id="btn-registr" class="regis" value="Сохранить" style="display: none">
    <input type="submit" id="valid" name="valid" class="regis" value="Регистрация">
	      </form>
		</div>	</div>
		
  <script>
$("#musical_bd2").validate({
  rules: {
    fio: {
    required: true,
      minlength: 5,
      maxlength: 100
    },
        name: {
  required: true,
      minlength: 5,
      maxlength: 100
    },
      otch: {
  required: true,
      minlength: 5,
      maxlength: 100
    },
     prof: {
  required: true,
      minlength: 5,
      maxlength: 100
    },
    },
  messages: {
  fio: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 5-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 100-ни символов")
  },
  name: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 5-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 100-ни символов")
  },
  otch: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 5-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 100-ни символов")
  },
  otch: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 5-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 100-ни символов")
  }


  },
   submitHandler: function() {
        var msg   = jQuery('#musical_bd2').serialize(); // ID формы
        jQuery.ajax({
            method: 'POST', // Метод отправки
            url: 'form/sqlreg2.php', // Адрес обработчика
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

</script>
</center>
	