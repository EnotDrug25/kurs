<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$idx=$_POST['idx'];
session_start();
$idm=$idx;
$_SESSION['idm']=$idm;
echo $idm;
$sql=mysqli_query($link, "SELECT * FROM `pacient`,`med/karta` WHERE `id_pac_pacient`=`id_pac` AND `id_pac`='$idx'" );
echo "<center>
<div class='table-bord' id='border' style='margin-top:30px'><br>
<center>
 <p>Музыкант
    <table class='table-bord2'> <tr>
        <td class='gg'><b>Дата Посещения
        <td class='gg'><b>Диагноз
        <td class='gg'><b>Пациент

        </tr>
    </table>
";
    while ($row = $sql->fetch_array()) {
        echo "<table class='table-bord3'>" . "<tr>";

            echo "<td class='gg'>" . $row['begin'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['Diagnoz'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['FIO'] .  " " . "</td>";
        echo "</tr>" . "</table>";
    }
/*$sql=mysqli_query($link, "SELECT * FROM `reg`" );
$row = $sql->fetch_assoc();
     echo $row["Surename"]. ' ' .$row["Name"]. ' ' .$row["Lastname"]. ' ' .$row["email"]. ' ' .$row["BirthDay"]. ' ' .$row["Login"]. ' ' .$row["Password"] ;*/
?>
<br>
<input type="button" class="bb1" value="Изменить" onclick="loadpage('form/medkart/izmen_chel.php')">
 <input type="button"  value="Удалить" class='bb1 delete' ">
<input type="button" class="bb1" value="Назад" onclick="loadpage('form/pacient/vivod_pacient.php')"><br><br>
</center>
</div>

<script>
   $(document).ready(function(){        
        $('.peresilbtn').click(function(){  
        idx=$(this).attr('name');
                $.post('form/medkart/izmen_chel.php', {idx: idx}, function(html){
                $("#content").html(html);
                });
         });
    });
     $(document).ready(function(){        
        $('.delete').click(function(){  
        idx=$(this).attr('name');
                $.post('form/medkart/delete.php', {idx: idx}, function(html){
                $("#content").html(html);
                });
         });
    });
</script>