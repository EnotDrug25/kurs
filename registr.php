<center><div class="registr-bord" id="border"><br><br>
<p>Регистрация</p>
	 <div class="wrapper">
 <form id="musical_bd"  action="javascript:void(null);" method="POST" onsubmit="musical_bd()">
	<input type="text" id="login" name="login" placeholder="Логин" ><br><br>

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

	<input type="date" id="data" name="data"  placeholder="Дата рождения" ><br><br>

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


  <input type="text" name="sns" id="sns"placeholder="СНИЛС" ><br><br>

	<input type="password" id="password" name="password" placeholder="Пароль" ><br><br>

	<input type="password" name="password_again" id="password_again"placeholder="Повторите пароль" ><br><br>

   <input type="reset" class="regis" value="Войти" onclick="loadpage('join.php')">
   <input type="submit" id="btn-registr" class="regis" value="Сохранить" style="display: none">
    <input type="submit" id="valid" name="valid" class="regis" value="Регистрация">
	      </form>
		</div>	</div>
		
  <script>
$("#musical_bd").validate({
  rules: {
    login: {
      required: true,
      minlength: 5,
      maxlength: 100
    },
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
     email: {
  required: true,
      minlength: 5,
      maxlength: 100
    },
     sns:{
 required: true,
 minlength:8,
 maxlength:8
    },
      data: {
  required: true
    },
     password: {
  required: true,
      minlength: 5,
      maxlength: 100
    },
     password_again: {
equalTo:"#password"
    }
    },
  messages: {
     data: {
      required: "<br>Пожалуйста укажите дату рождения",
    },
  login: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 5-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 100-ни символов")
  },
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
  sns: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 8-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 8-ни символов")
  },
  password: {
    required: "<br>Поле адрес обязательно для заполнения",
    minlength: jQuery.validator.format("<br>Длина диагноза должна быть больше 5-ти символов"),
    maxlength: jQuery.validator.format("<br>Длина диагноза должна быть менее 100-ни символов")
  },
  password_again: {
    required: "<br>Пароли не совпадают",
    equalTo:"<br>Пароли не совпадают",
  }


  },
   submitHandler: function() {
        var msg   = jQuery('#musical_bd').serialize(); // ID формы
        jQuery.ajax({
            method: 'POST', // Метод отправки
            url: 'sqlreg.php', // Адрес обработчика
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
</center>
	