
<center><div class="border2" id="border" style="margin-top:30px">
<br><br>
  <?php
if (isset($_POST["famil"]) ) { 
	// Формируем массив для html ответа
	$famil=$_POST["famil"];
	$adr=$_POST["adr"];
	$phone=$_POST["phone"];
	$spec=$_POST["spec"];
	$medpolis=$_POST["medpolis"];
	$numutch=$_POST["numutch"];
	$error=0;
	?>
		<div style="color:red"><?php
	/*if(empty($famil)){
			echo 'Не введено ФИО'; $error++?><br><br><?php }
	if(empty($name)){
			echo 'Не введено Имя'; $error++?><br><br><?php }
	if(empty($otch)){
			echo 'Не введено Отчество'; $error++?> <br><br><?php }
	if(empty($spec)){
			echo 'Не введено Место в группе'; $error++?> <br><br><?php }
	if(empty($ans)){
			echo 'Не введён Ансамбль'; $error++?> <br><br><?php }
			 
	if(!empty($famil) and !empty($name) and !empty($otch) ) {?>
	</div><p> Фамилия = <?php echo $famil ?><br>
	 Имя = <?php echo $name ?><br>
	 Отчество = <?php echo $otch ?><br>
	 Место в группе = <?php echo $spec ?><br>
	 Ансамбль = <?php echo $ans ?>
	 </p>
	 <?php
}*/
if($error==0){
	include 'C:/wamp64/www/medT8/BD/form/pacient/send_pacient.php';
}
?>
	<input type="button" id="btn2" class="bb1" value="Повторить ввод" onClick=reset();loadpage('form/pacient/pacient.php'); /><br>
	<?php
}
?>
<br>
<br>
</div>
