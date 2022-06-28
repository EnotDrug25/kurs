function loadpage(a) {
   $.ajax({
        url: a,     // какой файл нужно загрузить
        cache: false,
        success: function(html){
        $("#content").html(html);  // область где разместить файл. id='content'
    }
  });
}

function contr_avtr(result_form, ajax_form, url) {
$.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            $('#ajax_form').css('display','none');// Cкрыть форму
            $('#result_form').html(response);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}

function reset() {
   $('#ajax_form').css('display','none');
   $('#result_form').html('');
}

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            $('#ajax_form').css('display','none');// Cкрыть форму
            $('#result_form').html(response);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}

function join_send_test() {
    var flag=0; 
    login = $("#login_join").val();
    password = $("#password_join").val();
// Код проверки      
    $.post('join_test.php', {login_join: login, password_join:password}, function(html){
            $("#content").html(html);
        }
);
}

function vost_pass() {
    var flag=0; 

   login = $("#login").val();
// Код проверки      
    $.post('zabpass.php', {login: login}, function(html){
            $("#content").html(html);
        }
);
}

function zamena() {
    var flag=0; 
    zamena_pass = $("#zamena_pass").val();
   login = $("#login").val();
// Код проверки      
    $.post('update_pass.php', {zamena_pass: zamena_pass, login: login}, function(html){
            $("#content").html(html);
        }
);
}


function musical_send_test() {
    var flag=0; 
    famil = $("#famil").val();
    name = $("#name").val();
    otch = $("#otch").val();
    spec = $("#spec").val();
    ans = $("#ans").val();
// Код проверки      
    $.post('C:/wamp64/www/BD/form/musical/action_ajax_music_form.php', {famil: famil, name:name, otch:otch, spec:spec, ans:ans}, function(html){
            $("#content").html(html);
        }
);
}
