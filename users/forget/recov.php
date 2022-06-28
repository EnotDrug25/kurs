<center><br><br><br><br><br><br><div class="poleforg"><br><br>
<?php 

$login=$_SESSION['forgotlogin'];
$rand=rand(8,12);
$string="";
$simv = array ( "q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m","Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M");
      for ($k = 0; $k < $rand; $k++)
        {
          shuffle ($simv);
          $string = $string.$simv[1];
 
        }
        echo "Ваш новый пароль: ".$string;
        echo "<br><button class='regbutton' id='usethispass'>Принять</button>";
        echo "<br><br>Или придумайте самостоятельно:<br><br>";
$_SESSION['string']=$string; 
?>
<form method="POST" id="forget" action="javascript:void(null);" onsubmit="newpassform();">
  <input type="password" name="newpass1" placeholder="Новый пароль"><br>
  <input type="password" name="newpass2" placeholder="Подтвердите пароль"><br>
  <input type="submit" name="newpass" value="Отправить">
</form>

</div></center>
<script type="text/javascript" src="js/forgetsends.js"></script>
