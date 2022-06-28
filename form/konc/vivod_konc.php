<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>
<center>
	<table class="table-bord2"> <tr>
		<td class='gg'><b>Фамилия
		<td class='gg'><b>Имя
		<td class='gg'><b>Отчество
		<td class='ggmail'><b>Мыло
		<td class='gg'><b>ДеньРождения
		<td class='gg'><b>Логин
		<td class='gg'><b>Пароль
		</tr>
	</table>
<?php
include 'C:/wamp64/www/T8/BD/ajax/bd.php';

$sql=mysqli_query($link, "SELECT * FROM `reg`" );
    
    while ($result = mysqli_fetch_array($sql)) {
        echo "<table class='table-bord3'>" . "<tr>";
            echo "<td class='gg'>" . $result["Surename"] . " " . "</td>";
            echo "<td class='gg'>" . $result["Name"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["Lastname"] .  " " . "</td>";
            echo "<td class='ggmail'>" . $result["email"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["BirthDay"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["Login"] .  " " . "</td>";
            echo "<td class='gg'> " . $result["Password"] .  " " . "</td>";
        echo "</tr>" . "</table>";
    }
/*$sql=mysqli_query($link, "SELECT * FROM `reg`" );
$row = $sql->fetch_assoc();
     echo $row["Surename"]. ' ' .$row["Name"]. ' ' .$row["Lastname"]. ' ' .$row["email"]. ' ' .$row["BirthDay"]. ' ' .$row["Login"]. ' ' .$row["Password"] ;*/
?>
<br>
<input type="button" class="bb1" value="Назад" onclick="loadpage('form/formDano.php')"><br><br>
</center>
</div>
</center>
