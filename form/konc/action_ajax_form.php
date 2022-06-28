<center><div class="border2" id="border" style="margin-top:30px">
<br><br>
  <?php
if (isset($_POST["NAZ"]) && isset($_POST["STR"]) && isset($_POST["ORG"])) { 
	$naz=$_POST["NAZ"];
	$str=$_POST["STR"];
	$org=$_POST["ORG"];
	?>
	<div style="color:red"><?php
	if(empty($naz)){
			echo 'Не введено название';?><br><br><?php }
			?>	
	</div>
	
			<?php
	if(!empty($naz) ) {?>
	<p> Название = <?php echo $naz ?><br>
	 Страна = <?php echo $str ?><br>
	 Организатор = <?php echo $org ?><br>
			</p>
<?php
}
?>
		<input type="submit" id="btn2" class="bb1" value="Повторить ввод" onClick=reset();loadpage('form/konc/konc.php'); /><br>
	<?php
}
?>
<br>
<br>
</div>