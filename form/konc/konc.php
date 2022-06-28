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
   <input type="text" name="NAZ" size="40" placeholder="Название"><br><br>
   <input type="text" name="STR" size="40" placeholder="Страна"><br><br>
   <input type="text" name="ORG" size="40" placeholder="Организатор"><br><br>
  <input type="submit" id="btn-konc" class="bb1" value="Повторить ввод"><br>
  </p>
  <br><br>
<br><br><br>
 </div>
 </center>
  <script>
				$("#btn-konc").click(
					function(){
						sendAjaxForm('content', 'ajax_form', 'form/konc/action_ajax_form.php');
						return false; 
					}
				);
	</script>