       <center>
 <center>
            <div id="result">
<h3>Поиск</h3>
 	<?php 
 	include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
$a=$_POST['value'];
echo '<input type="text" value ="' . $a . '" id="search">'
?>
    <table class="table-bord2">
 <tr>
        <td class='gg'><b>Логин
        <td class='gg'><b>Пароль
        <td class='gg'><b>Фамилия
        <td class='gg'><b>Имя
        <td class='gg'><b>Отчество
        <td class='gg'><b>Пол
        <td class='gg'><b>Снилс
        <td class='gg'><b>Участок
        <td class='gg'><b>День рождения
        </tr>
<?php
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
if($_POST['value']) {
    $query ="SELECT * FROM `pacient`,`users` WHERE `pacient`.`snils`=`users`.`snils` and `Famil_pac` LIKE '%{$_POST['value']}%'";
    $result = $link->query($query);
    if ($result = $link->query($query)) {
        while ($row = $result->fetch_assoc()) {
            echo "<td class='gg'>" . $row["login"] . " " . "</td>";
            echo "<td class='gg'>" . $row["password"] .  " " . "</td>";
            echo "<td class='gg'>" . $row["Famil_pac"] . " " . "</td>";
            echo "<td class='gg'>" . $row["Name_pac"] .  " " . "</td>";
            echo "<td class='gg'>" . $row["Otch_pac"] .  " " . "</td>";
            echo "<td class='gg'>" . $row["gender_gender"] .  " " . "</td>";
            echo "<td class='gg'>" . $row["snils"] .  " " . "</td>";
            echo "<td class='gg'>" . $row["uch"] .  " " . "</td>";
            echo "<td class='gg'>" . $row["birthday"] .  " " . "</td>";
       echo "</tr>";
        }
    }
}
?>
</table>
<input type="button" class="bb1" value="Сброс" onclick="loadpage('vivod_pacient.php')">
<input type="button" class="bb1" value="Назад" onclick="loadpage('form/formDano.php')">
<input type="button" value="Ok" class='bb1 peresilbtn3' ">

</center>
</div>
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

function update_table() {
    var flag=0; 
    search = $("#search").val();
// Код проверки      
    $.post('update-table.php', {search: search}, function(html){
            $("#content").html(html);
        }
);
}
$(document).ready(function(){
  $("#search").keyup(function(){
    $.ajax({
        url: "script.php", 
        type: "POST",
        data: {
            value:  $('#search').val()
         }, 
        success: function(result){
      $("#result").html(result);
    }});
});  
});
</script>