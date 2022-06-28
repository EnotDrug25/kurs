<center><content>
  <script type="text/javascript">alert("После авторизации сайт начнет использовать файлы cookie, в которых могут содержаться Ваши личный данные (ФИО, почта, пароль и тд). Продолжая использовать сайт, Вы соглашаетесь с иcпользованием файлов cookie");</script>
  <?php
session_start();
$_SESSION['auth']=false;
$login=$_POST['loginavt'];
$pass=$_POST['passavt'];
$_SESSION['login']=$login;
$_SESSION['password']=$pass;
settype($pass, "string");
$rand=rand(20,40);
$key="";
$simv = array ( "q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m","Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M");
      for ($k = 0; $k < $rand; $k++)
        {
          shuffle ($simv);
          $key = $key.$simv[1];
 
        }




// Параметры для подключения
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
try {
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("set names utf8");
} catch (PDOException $e) {
    // Если есть ошибка соединения, выводим её
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}

include('C:/wamp64/www/medT8/BD/join.php');
$loghelp=0;

$sql = mysqli_query($link, "SELECT * FROM `users`");

while($infoItems = mysqli_fetch_array($sql)){
    if($infoItems['login']==$login and $infoItems['password']==$pass){
      if($infoItems['admin']==1){
         $id=$infoItems['id'];
         $auth="a";
         $loghelp=2;
         $name=$infoItems['Name'];
         $surn=$infoItems['Famil'];
         
         setcookie('login', $login, time()+60*60, "/");
         setcookie('key', $key, time()+60*60, "/");
         setcookie('username',$name,time()+60*60,"/");
         setcookie('usersurname',$surn,time()+60*60,"/");
         setcookie('auth', $auth, time()+60*60, "/");
         setcookie('iduser', $id, time()+60*60, "/");
         mysqli_query($link,'UPDATE users SET cookie="'.$key.'" WHERE login="'.$login.'"');
         $_SESSION['auth']=true;
         break;}

      else{
        $id=$infoItems['id'];
        $auth="u";
        $loghelp=1;
         $name=$infoItems['Name'];
         $surn=$infoItems['Famil'];
                 
        mysqli_query($link,"UPDATE `users` SET `cookie`='$key' WHERE `login`='$login'");
        setcookie('login', $login, time()+60*60, "/");
        setcookie('key', $key, time()+60*60, "/");
        setcookie('username',$name,time()+60*60,"/");
        setcookie('usersurname',$surn,time()+60*60,"/");
        setcookie('auth', $auth, time()+60*60, "/");
        setcookie('iduser', "$id", time()+60*60, "/");
        $_SESSION['auth']=true;

        break;}
    }

    else{$loghelp=0;}
}

  if($loghelp==0){
    echo "<br>Неправильный логин или пароль";
    $avt=0;

  }
  else if($loghelp==1){
    $avt=1;
  }
  else{
    $avt=2;
 }

?>
<script type="text/javascript">location.reload();</script>
</content>
</center>