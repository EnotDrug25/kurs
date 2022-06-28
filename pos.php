<center>
<div class="doc-bord1" id="border"><br>

 <center>

    <table class="table-bord2"> <tr>
        <td class='gg'><b>№Посещения
        <td class='gg'><b>Фамилия
        <td class='gg'><b>Имя
        <td class='gg'><b>Отчество
        <td class='gg'><b>Профессия
        <td class='gg'><b>Кабинет
        <td class='gg'><b>Номер участка
        </tr>
    <?php
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
session_start();
$login = $_COOKIE['login'];

include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$sql1=mysqli_query($link, "SELECT `snils` FROM `users`  WHERE `login`='{$login}'");
$bet=mysqli_fetch_array($sql1);
$idm=$bet['snils'];
$sql2=mysqli_query($link, "SELECT `id_pac` FROM `pacient`  WHERE `snils`='{$idm}'");
$bet1=mysqli_fetch_array($sql2);
$idx=$bet1['id_pac'];
$sql3=mysqli_query($link, "SELECT * FROM `priem`  WHERE `id_pac`='{$idx}'");
$bet2=mysqli_fetch_array($sql3);
$idy=$bet2['id_doc'];
$sql4=mysqli_query($link, "SELECT * FROM `doctor`  WHERE `id_doc`='{$idy}'");
        $result2 = mysqli_fetch_array($sql4);
$sql5=mysqli_query($link, "SELECT * FROM `priem`  WHERE `id_pac`='{$idx}'");
$i=0;

    while ($result = mysqli_fetch_array($sql5)) {
        echo "<tr>";
            echo "<td class='gg'>"; echo $i=$i+1; echo "</td>";
            echo "<td class='gg'>" . $result2["Famil_doc"] . " " . "</td>";
            echo "<td class='gg'>" . $result2["Name_doc"] .  " " . "</td>";
            echo "<td class='gg'>" . $result2["Otch_doc"] .  " " . "</td>";
            echo "<td class='gg'>" . $result2["profession"] .  " " . "</td>";
            echo "<td class='gg'>" . $result2["cab"] .  " " . "</td>";
            echo "<td class='gg'>" . $result2["num_uch_uchastok"] .  " " . "</td>";
       echo "</tr>";
    }
    ?>
</table>
<input type="button" class="bb1" value="Главная" onclick="loadpage('main.php')">
<input type="button" value="Запись"  onclick="loadpage('form/priem/priem_test.php')" class='bb1 peresilbtn3' >
</center>
</div>
</center>
