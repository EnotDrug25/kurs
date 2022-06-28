<center>
<div class="table-bord" id="border" style="margin-top:30px"><br>

 <center>

    <table class="table-bord2"> <tr>
        <td class='gg'><b>Изменить
        <td class='gg'><b>Дата посещения
        <td class='gg'><b>Диагноз
        <td class='gg'><b>Пациент
        </tr>
    </table>
    <?php
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';

$sql=mysqli_query($link, "SELECT * FROM `med/karta`,`pacient` WHERE `id_pac_pacient`=`id_pac`" );
    
    while ($result = $sql->fetch_array()) {
        echo "<table class='table-bord3'>" . "<tr>";
            echo "<td class='gg'><input type='radio' class='peresilbtn2' id=" . $result["id"] . " name='radio' style='box-shadow:none ' value='Участники'><br><br></td>";
            echo "<td class='gg'>" . $result["begin"] . " " . "</td>";
            echo "<td class='gg'>" . $result["Diagnoz"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["FIO"] .  " " . "</td>";
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
        $('.sinselect').change(function(){  
        idx=$(this).val();
        $.post('form/pacient/peresil.php', {idx:idx}, function(html){$('#content').html(html)
        });
        });
});

$(document).ready(function(){     
$('.peresilbtn2').change(function(){     
    idx=$(this).attr('id');
    });
        $('.peresilbtn3').click(function(){  
                $.post('form/medkart/izmen.php', {idx: idx}, function(html){
                $("#content").html(html);
                });
         });
    });

</script>