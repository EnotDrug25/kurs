function contr_avtoreg() {
	$('#result1').html("");
	$('#result2').html("");
	$('#result3').html("");
	$('#result4').html("");
	$('#result5').html("");
	$('#result6').html("");
	$('#result7').html("");
	$('#result8').html("");
	$('#result9').html("");
	
// проверка данных на стороне клиента
	var errors=0;
	fio = $("#fio").val();
	fiol= fio.length;
	name = $("#name").val();
	namel= name.length;
	otch = $("#otch").val();
	otchl= otch.length;
	email = $("#email").val();
	birth_form = $("#data").val();
	password = $("#password").val();
	password_again = $("#password_again").val();
	login = $("#login").val();
	if(login ==""){$("#result9").html("Поле не должно быть пустым*");errors++;}

	if(fio ==""){$("#result1").html("Поле не должно быть пустым*");errors++;}
	else if(fiol<3){alert('Фамилия не может быть меньше 3 символов');errors++}

	if(name ==""){$("#result2").html("Поле не должно быть пустым*");errors++;}
	else if(namel<2){alert('Имя не может быть меньше 1 символа');errors++}

	if(otch ==""){$("#result3").html("Поле не должно быть пустым*");errors++;}
	else if(otchl<3){alert('Отчество не может быть меньше 3 символов');errors++}

	if(email ==""){$("#result4").html("Поле не должно быть пустым*");errors++;}

	if(birth_form ==""){$("#result5").html("Поле не должно быть пустым*");errors++;}

	if(password ==""){$("#result6").html("Поле не должно быть пустым*");errors++;}

	if(password_again ==""){$("#result7").html("Поле не должно быть пустым*");errors++;}
	else if(password_again != password){$("#result7").html("Пароли не совпадают*");errors++;}
	
	if (birth_form) {
    now = new Date().getFullYear();
    bir = new Date(birth_form).getFullYear();
    var dif = now-bir;
    if (dif<14) {alert('Ты еще слишком мелкий');errors++;}
    else if(dif>100) {alert('Обратитесь в тех поддержку');errors++}
   }
    if(errors==0){
    $("#valid").css("display","none");
    $("#btn-registr").css("display","inline-block");
	}
	
}

function reset() {
   $('#ajax_form').css('display','inline'); // Показать форму
   $('#result_form').html('');
}

function loadpage(a, success) {
	const tf = function(response){}; //функция-заглушка
	if(success == undefined){
		success = tf;
	} // задаем фунцию обратного вызова. Функция обратного вызова это простая функция которая работает при определенных условиях. В нашем случаи  - это успешное завершение запроса, если нет  гененируется анонимная функция заглушки (нечего не происходит)
	$.ajax({
		async: true,
		url: a,
		cache: false,
		success: function(html){
			$("#content").html(html);
			success(html);
		}
	});
}

function sendAjaxForm(c, ajax_form, url, success, error) {
    const tf = (response)=>{}; //функция-заглушка
	if(success == undefined){
		success = tf;
	}// или принимает фунция обратного вызова на успешное завершение запроса или гененирует анонимную функцию заглушку
	if(error == undefined){
		error = tf;
	} // если произошла ошибка, вызывается сообщение об ошибке.
	$.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
		    $('#ajax_form').css('display','none');// Cкрыть форму
			$('#border').css('display','none');
        	$('#content').html(response);
			success(response);
    	},
    	error: function(response) { // Данные не отправлены
            $('#content').html('Ошибка. Данные не отправлены.');
			error(response);
    	}
 	});
}