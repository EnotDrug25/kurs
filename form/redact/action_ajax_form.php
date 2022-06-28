<center><div class="border2" id="border" style="margin-top:30px">
<br><br>
  <?php
if (isset($_POST["PROZ"]) && isset($_POST["STR"]) && isset($_POST["INS"]) ) { 
	// Формируем массив для html ответа
	$proz=$_POST["PROZ"];
	$str=$_POST["STR"];
	$ins=$_POST["INS"];
	?>
	<div style="color:red"><?php
	if(empty($proz)){
			echo 'Не введён псвевдоним исполнителя';?><br><br><?php }
	if(empty($ins)){
			echo 'Не введено название музыкального инструмента';?><br><br><?php }
			?>	
			<?php 
	if(!empty($proz) and !empty($ins) ) {?>
			</div><p> Прозвище = <?php echo $proz ?><br>
	 Страна = <?php echo $str ?><br>
	 Инструмент = <?php echo $ins ?>
	</p>
	<?php
}
?>
	
	<input type="submit" id="btn2" class="bb1" value="Повторить ввод" onClick=reset();loadpage('form/redact/redact.php'); /> <br>
	<?php
}
?>
<br>
<br>
</div>
