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
   <input type="text" name="NAZ" size="40" placeholder="Название" required><br><br>
   <input type="text" name="SOZ" size="40" placeholder="Создатель" ><br><br>


   <select id="ans" name="JNR" class="table-bord2" >
<?php
include 'C:/wamp64/www/T8/BD/ajax/bd.php';
$sql1="SELECT * FROM `ansamble`";
 //Если вставка прошла успешно
$result1 = $link->query($sql1);
$row1=mysqli_fetch_array($result1);
 do{?>
    <option value="<?php echo $row1['id'];?>"><?php echo $row1['aname'];?></option>
<?php }
while($row1 = mysqli_fetch_array($result1));
?>
</select>


    <p><textarea rows="7" cols="40" name="COL" placeholder="Введите ваш отзыв"></textarea></p>
    <br>
   <input type="submit" class="bb1"  id="btn-ms" value="Сохранить">
  </form>

  <br><br>
<br><br><br>
 </div>
 </center>
  <script>
				$("#btn-ms").click(
					function(){
						sendAjaxForm('content', 'ajax_form', 'form/music/action_ajax_form.php');
						return false; 
					}
				);
	</script>