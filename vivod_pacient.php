            <center>
<div class="doc-bord2" id="border" style="margin-top:30px"><br>

 <center>
            <div id="result">
<h3>Поиск</h3>
<input type="text" id="search">
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

$sql=mysqli_query($link, "SELECT * FROM `pacient`,`users` WHERE `pacient`.`snils`=`users`.`snils`" );
    
    while ($result = mysqli_fetch_array($sql)) {
            echo "<td class='gg'>" . $result["login"] . " " . "</td>";
            echo "<td class='gg'>" . $result["password"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["Famil_pac"] . " " . "</td>";
            echo "<td class='gg'>" . $result["Name_pac"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["Otch_pac"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["gender_gender"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["snils"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["uch"] .  " " . "</td>";
            echo "<td class='gg'>" . $result["birthday"] .  " " . "</td>";
       echo "</tr>";
    }
    ?>
</table>
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