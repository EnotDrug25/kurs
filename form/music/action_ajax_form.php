<center><div class="border2" id="border" style="margin-top:30px">
<br><br>
  <?php
if (isset($_POST["NAZ"]) && isset($_POST["SOZ"]) && isset($_POST["JNR"]) && isset($_POST["COL"])) { 
	// Формируем массив для html ответа
	$naz=$_POST["NAZ"];
	$str=$_POST["SOZ"];
	$jnr=$_POST["JNR"];
$col = fopen("textarea1.php", "w");
// Записать текст
fwrite($col, $_POST['COL']); 
// Закрыть текстовый файл
fclose($col);
	?>
	<div style="color:red"><?php
	if(empty($naz)){
			echo 'Не введено название';?><br><br><?php }
	if(empty($jnr)){
			echo 'Не введён жанр';?><br><br><?php }
	if(empty($col)){
			echo 'Не введена длительнасть';?> <br><br><?php }
			?>	
			</div>
			<?php 
	if(!empty($naz) and !empty($col) and !empty($jnr) ) {?>
	<p> Название = <?php echo $naz ?><br>
	 Создатель = <?php echo $str ?><br>
	 Жанр = <?php echo $jnr ?><br>
	 Количество = <?php echo $col ?>
	</p>
		<?php
}
?>
	<input type="submit" id="btn2" class="bb1" value="Повторить ввод" onClick=reset();loadpage('form/music/music.php'); /><br>
	<?php
}
?>

<br>
<br>
</div>
