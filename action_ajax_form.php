<center><div class="border2" id="border" style="margin-top:30px">
<br><br>
  <?php
if (isset($_POST["fam"]) && isset($_POST["name"]) && isset($_POST["otch"]) && isset($_POST["email"]) && isset($_POST["date"]) && isset($_POST["password"]) && isset($_POST["password_again"])) { 
	// Формируем массив для html ответа
	$fam=$_POST["fam"];
	$name=$_POST["name"];
	$otch=$_POST["otch"];
	$email=$_POST["email"];
	$date=$_POST["date"];
	$pas=$_POST["password"];
	$pas_a=$_POST["password_again"];
	?>
	<div style="color:red"><?php
	if(empty($fam)){
			echo 'Не введена фамилия';?><br><br><?php }
	if(empty($name)){
			echo 'Не введено имя';?><br><br><?php }
	if(empty($otch)){
			echo 'Не введено отчество';?> <br><br><?php }
	if(empty($email)){
			echo 'Не введена почта';?><br><br><?php }
	if(empty($date)){
			echo 'Не введена дата рождения';?><br><br><?php }
	if(empty($pas)){
			echo 'Не введён пароль';?><br><br><?php }
	if(empty($pas_a)){
			echo 'Не введён повторный пароль';?><br><br><?php }
			?>	
			</div>
			<div style="color:red"><?php
	if(empty($pas_a) != ($pas)){
			echo 'Повторный пароль введён неверно';?><br><br><?php }
?>	
			</div>
			<?php 
	if(!empty($naz) and !empty($name) and !empty($otch) and !empty($email) and !empty($date) and !empty($pas) and !empty($pas_a)) {?>
	<p> Регистрация прошла успешно</p>
		<?php
}
?>
<input type="submit" id="btn2" class="bb1" value="Войти" onClick=reset();loadpage('join.php'); />
	<input type="submit" id="btn2" class="bb1" value="Повторить ввод" onClick=reset();loadpage('registr.php'); /><br>
	<?php
}
?>

<br>
<br>
</div>
