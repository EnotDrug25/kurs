<?php
include 'C:/wamp64/www/T8/BD/ajax/bd.php';

 $sql = mysqli_query($link, "SELECT `name` FROM `ansamble` ");
    //Если вставка прошла успешно
$result=$sql;

 while($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
<option value=<?php echo $row['name']?>></option>
<?php } 

?>