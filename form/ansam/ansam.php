<div class="border">
	 <div class="wrapper">
 <form method="post">
   <input type="button" class="nach" value="СПРАВОЧНИК" onclick="loadpage('form/formRab.php')">
</div>
<center><div class="border2" id ="border" style="margin-top:30px">
<br>
<form method="post" id="ajax_form1"  action="">
</form>
<form id="sell_ansam" name="sell_ansam" method="POST" action="javascript:void(null);" onsubmit="sendform_ansam()">
  <p><b>Введите значения</b><br>
   <input type="text" name="name" size="40" placeholder="Название" required><br><br>
   <input type="text" name="country" size="40" placeholder="Страна"><br><br>
   <input type="text" name="count" size="40" placeholder="Количество участников" required><br><br>
    <input type="text" name="boss" size="40" placeholder="Руководитель"><br><br>
   <button type="button" class="bb1" id="btn-ans" value="Сохранить">Сохранить</button>
 </form>
  </p>
<br><br>
 </div>
 </center>
  <script>
				$("#btn-ans").click(
					function(){
						sendAjaxForm('content', 'sell_ansam', 'form/ansam/action_ajax_form.php');
						return false; 
					}
				);
	</script>
  <script>   

    function sendform_ansam()  { 
        var msg   = jQuery('#sell_ansam').serialize(); // ID формы
        jQuery.ajax({    
            method: 'POST', // Метод отправки
            url: 'sendansam.php', // Адрес обработчика
            beforeSend: function(){
                jQuery('#content').html('Отправляю...'); // Промежуточный статус
            },
        data: msg,
        cache: false,  
        success: function(html){  
    jQuery('#content').html(html);  }  
    }); } // Вывод ответа
</script> 