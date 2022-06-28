<div class="border">
	 <div class="wrapper">
 <form method="post">
   <input type="button" class="nach" value="СПРАВОЧНИК" onclick="loadpage('form/formRab.php')">
</div>
<center><div class="border2" id="border" style="margin-top:30px">
<br><br>
<script>	
function valid_ansam(){
</script>

  <?php
if (isset($_POST["name"]) && isset($_POST["country"]) && isset($_POST["count"]) && isset($_POST["boss"])) { 
	$errors=0;
	$name=$_POST["name"];
	$country=$_POST["country"];
	$count=$_POST["count"];
	$boss=$_POST["boss"];
	?>
	<div style="color:red"><?php

	if(empty($name)){
			echo 'Не введено название'; $errors++; ?><br><br><?php }

	if(empty($count)){
			echo 'Не введено количество участников'; $errors++;?>  <input type="submit" class="regis" id="afterbadansam" value="Назад" ><br><br><?php }
?>
			</div>
			
	<?php 
	if(!empty($name) and !empty($count) and !empty($mes) ) {
include('ansam_obrat.php');
}

 if($errors==0){
 	include('sendansam.php');
	}
}
?>

<br>
<br>
</div>
<script>  
     $(document).ready(function(){        
        $('#afterbadansam').click(function(){  
            $.ajax({  
                url: "form/ansam/ansam.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>