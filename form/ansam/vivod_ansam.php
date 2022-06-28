<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>
<center>
	<table class="table-bord2"> <tr>
		<td class='gg'><b>Название
		<td class='gg'><b>Страна
		<td class='gg'><b>Кол-во участников
		<td class='gg'><b>Руководитель
		<td class='gg'><b>Просмотр участников
		</tr>
	</table>
<?php
include 'C:/wamp64/www/T8/BD/ajax/bd.php';

$sql=mysqli_query($link, "SELECT * FROM `ansamble`" );
    
    while ($result = mysqli_fetch_array($sql)) {
        echo "<table class='table-bord3'>" . "<tr>";
            echo "<td class='gg'>" . $result["aname"] . " " . "</td>";
            echo "<td class='gg'>" . $result["country"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["count"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["boss"] .  " " . "</td>";
            echo "<td class='gg'><input type='button' class='peresilbtn' name=" . $result["id"] . " value='Участники'><br><br></td>";
       echo "</tr>" . "</table>";
    }
/*$sql=mysqli_query($link, "SELECT * FROM `reg`" );
$row = $sql->fetch_assoc();+.
     echo $row["Surename"]. ' ' .$row["Name"]. ' ' .$row["Lastname"]. ' ' .$row["email"]. ' ' .$row["BirthDay"]. ' ' .$row["Login"]. ' ' .$row["Password"] ;*/
?>
<br>
<input type="button" class="bb1" value="Назад" onclick="loadpage('form/formDano.php')"><br><br>
</center>
</div>
</center>
<script>
   $(document).ready(function(){        
        $('.peresilbtn').click(function(){  
        idx=$(this).attr('name');
        alert(idx);
                $.post('form/ansam/peresil.php', {idx: idx}, function(html){
                $("#content").html(html);
                });
         });
    });
</script>>
