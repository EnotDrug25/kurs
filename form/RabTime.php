<center>
<div class="doc-bord1" id="border"><br>

 <center>

    <table class="table-bord2"> <tr>
        <td class='gg'><b>Фамилия
        <td class='gg'><b>Имя
        <td class='gg'><b>Отчество
        <td class='gg'><b>Профессия
        <td class='gg'><b>Кабинет
        <td class='gg'><b>Номер участка
        <td class='gg'><b>Время работы
        </tr>
    <?php
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';

$sql=mysqli_query($link, "SELECT * FROM `doctor` " );

    while ($result = mysqli_fetch_array($sql)) {
        echo "<tr>";
            echo "<td class='gg'>" . $result["Famil_doc"] . " " . "</td>";
            echo "<td class='gg'>" . $result["Name_doc"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["Otch_doc"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["profession"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["cab"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["num_uch_uchastok"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["work"] .  " " . "</td>";
           
           if (isset($_COOKIE['auth']) and $_COOKIE['auth'] == "a") {echo"
            <td class='gg' > <input type='submit' class='my-cab2' name=" . $result['id_doc'] . " id=" . $result['id_doc'] . " value='Изменить'>   </td>  
            ";}
             echo "</tr>";
    }
    ?>
</table>
<?php  if (isset($_COOKIE['auth']) and $_COOKIE['auth'] == "a") {?>
<input type='button' class='bb1' value='Добавить' onclick="loadpage('form/registr2.php')"
<?php
}?>><input type="button" class="bb1 peresilbtn3" style="margin-left: 5px" value="Главная" onclick="loadpage('main.php')">
</center>
</div>
</center>

<script> 
$('.my-cab2').click(function(){     
    idm=$(this).attr('id');
    });
        $('.my-cab2').click(function(){  
                $.post('form/izmen.php', {idm: idm}, function(html){
                $("#content").html(html);
                });
         });


</script>