<?php 
include 'C:/wamp64/www/T8/BD/ajax/bd.php';
$idx=$_POST['idx'];
echo $idx;
$sql=mysqli_query($link, "SELECT * FROM `ansamble` , `musicant` WHERE `musicant`.`id_ans`='$idx' AND `ansamble`.`id`='$idx' " );
$group = $sql->fetch_array();
echo "<center>
<div class='table-bord' id='border' style='margin-top:30px'><br>
<center>
 <p>Состав группы ". $group['aname'] ." 
    <table class='table-bord2'> <tr>
        <td class='gg'><b>Фамилия
        <td class='gg'><b>Имя
        <td class='gg'><b>Отчество
        <td class='gg'><b>Место в группе
        <td class='gg'><b>Страна
        </tr>
    </table>
";
    while ($row = $sql->fetch_array()) {
        echo "<table class='table-bord3'>" . "<tr>";
   
            echo "<td class='gg'>" . $row['famil'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['name'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['otch'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['jobb'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['country'] .  " " . "</td>";
        echo "</tr>" . "</table>";
    }
/*$sql=mysqli_query($link, "SELECT * FROM `reg`" );
$row = $sql->fetch_assoc();
     echo $row["Surename"]. ' ' .$row["Name"]. ' ' .$row["Lastname"]. ' ' .$row["email"]. ' ' .$row["BirthDay"]. ' ' .$row["Login"]. ' ' .$row["Password"] ;*/
?>
<br>
<input type="button" class="bb1" value="Назад" onclick="loadpage('form/ansam/vivod_ansam.php')"><br><br>
</center>
</div>