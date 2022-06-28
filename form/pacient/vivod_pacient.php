<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>

 <center>

    <table class="table-bord2"> <tr>
        <td class='gg'><b>Изменить
        <td class='gg'><b>ФИО
        <td class='gg'><b>Адрес
        <td class='gg'><b>Телефон
        <td class='gg'><b>Мед. полис
        <td class='gg'><b>Номер участка
        <td class='gg'><b>Пол
        </tr>
    </table>
    <?php
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';

$sql=mysqli_query($link, "SELECT * FROM `pacient`" );
    
    while ($result = mysqli_fetch_array($sql)) {
        echo "<table class='table-bord3'>" . "<tr>";
            echo "<td class='gg'><input type='radio' class='peresilbtn2' id=" . $result["id_pac"] . " name='radio' style='box-shadow:none ' value='Участники'><br><br></td>";
            echo "<td class='gg'>" . $result["FIO"] . " " . "</td>";
            echo "<td class='gg'>" . $result["adres"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["phone"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["med polis"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["number_uchas"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["gender"] .  " " . "</td>";
       echo "</tr>" . "</table>";
    }
    ?>

<input type="button" class="bb1" value="Назад" onclick="loadpage('form/formDano.php')">
<input type="button" value="Ok" class='bb1 peresilbtn3' ">
</center>
</div>
</center>
<script>

$(document).ready(function(){     
$('.peresilbtn2').change(function(){     
    idm=$(this).attr('id');
    });
        $('.peresilbtn3').click(function(){  
                $.post('form/pacient/izmen.php', {idm: idm}, function(html){
                $("#content").html(html);
                });
         });
    });

</script>