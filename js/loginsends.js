function login() {
var flag=0;
loginavt=$("#loginavt").val();
passavt=$("#passavt").val();
$.ajax({
url:"login/back.php",
method: "POST",
data: {loginavt: loginavt, passavt: passavt},
success: function(html){
$("#content").html(html);
}
});
}

$(document).ready(function(){
    $('#divavtorhead').click(function(){
    $.ajax({
    url: "users/loginform.php",
    cache: false,
    success: function(html){
    $("#content").html(html);
    }
    });
});

$('#startregbtn').click(function(){
$.ajax({
url: "users/reg/main.php",
cache: false,
success: function(html){
$("#content").html(html);
}
});
});
});

function sendstartreg() {


var msg = jQuery('#reg').serialize(); // ID формы
jQuery.ajax({
method: 'POST', // Метод отправки
url: 'users/reg/regback.php', // Адрес обработчика
beforeSend: function(){
jQuery('#content').html('Отправляю...'); // Промежуточный статус
},
data: msg,
cache: false,
success: function(html){
jQuery('#content').html(html); }
}); } // Вывод ответа

function startlogin() {


var msg = jQuery('#login').serialize(); // ID формы
jQuery.ajax({
method: 'POST', // Метод отправки
url: 'users/login/back.php', // Адрес обработчика
beforeSend: function(){
jQuery('#content').html('Отправляю...'); // Промежуточный статус
},
data: msg,
cache: false,
success: function(html){
jQuery('#content').html(html); }
}); } // Вывод ответа

$(document).ready(function(){

$('#startforgetbtn').click(function(){
$.ajax({
url: "users/forget/main.php",
cache: false,
success: function(html){
$("#content").html(html);
}
});
});
});