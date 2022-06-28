<div class="border">
	 <div class="wrapper">
 <form method="post">
   <input type="button" class="nach" value="СПРАВОЧНИК" onclick="loadpage('form/formRab.php')">
</div>
<center><div class="border2" id ="border" style="margin-top:30px">
<br><br>
  <form method="post" id="ajax_form"  action="">
</form>
  <form id="ajax_form" method="POST" action="">
  <p><b>Введите значения</b><br>
   <input type="text" name="PROZ" size="40" placeholder="Прозвище"><br><br>
   <input type="text" name="STR" size="40" placeholder="Страна"><br><br>
   <input type="text" name="INS" size="40" placeholder="Инструмент"><br><br>
   <input type="submit" class="bb1" id="btn-isp" value="Сохранить">
  </p>
  <br><br>
<br><br><br>
 </div>
 </center>
  <script>
				$("#btn-isp").click(
					function(){
						sendAjaxForm('content', 'ajax_form', 'form/redact/action_ajax_form.php');
						return false; 
					}
				);
	</script>
