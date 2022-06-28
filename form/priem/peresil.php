<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$idx=$_POST['idx'];
?><script >alert(idx);</script><?php
$sql=mysqli_query($link, "SELECT * FROM `doctor` WHERE `profession`='$idx'" );

echo "<center>
<div class='doc-bord' id='border'><br>
<center>
 <p>Выбор ". $idx ."
    <table class='table-bord2'> <tr>
        <td class='gg'><b>Фамилия
        <td class='gg'><b>Имя
        <td class='gg'><b>Отчество
        <td class='gg'><b>Участок
        <td class='gg'><b>Кабинет
        <td class='gg'><b>Записаться
        </tr>

";
    while ($row = $sql->fetch_array()) {
        echo "<tr>";
   
            echo "<td class='gg'>" . $row['Famil_doc'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['Name_doc'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['Otch_doc'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['num_uch_uchastok'] .  " " . "</td>";
            echo "<td class='gg'>" . $row['cab'] .  " " . "</td>";
            echo "<td class='gg'><button class='inf-menu' id=" . $row["id_doc"] . " name='button' style='box-shadow:none' placeholder='Записаться'>Записаться</button><br><br></td>";
        echo "</tr>";
    }
    ?></table>
<br>
</center>
</div>
<script>
$('.inf-menu').click(function(){
    idx=$(this).attr('id');
                $.post('form/priem/priem_zapis.php', {idx: idx}, function(html){
                $("#content").html(html);
         });
    });

</script>