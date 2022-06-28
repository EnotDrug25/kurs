<center>
<?php
$flag=0;
session_start();
$_SESSION['surn']=$_POST['surn'];
$_SESSION['name']=$_POST['name'];
$_SESSION['otch']=$_POST['otch'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['data']=$_POST['data'];
$_SESSION['login']=$_POST['login'];
$_SESSION['pass']=$_POST['pass'];

$surname = $_SESSION['surn'];
$name =$_SESSION['name'];
$otch =$_SESSION['otch'];
$email =$_SESSION['email'];
$data =$_SESSION['data'];
$login =$_SESSION['login'];
$pass =$_SESSION['pass'];
$level='user';


include('../../../db_con.php');
$link=$_SESSION['link'];
$_SESSION['link']=$link;

/*ПРОВЕРКА УНИКАЛЬНОСТИ ДАННЫХ*/
$result = mysqli_query($link,"SELECT `login` FROM `users`");

  $res = array();
  while($row = mysqli_fetch_row($result))
  $res[] = $row[0];
  if (in_array($login,$res)){
      echo 'Такой Логин уже есть<br>';
      $flag=1;
  }





/*ПРОВЕРКА УНИКАЛЬНОСТИ ДАННЫХ*/
$result1 = mysqli_query($link, "SELECT `email` FROM `users`");

  $res1 = array();
  while($row1 = mysqli_fetch_row($result1))
  $res1[] = $row1[0];
  if (in_array($email,$res1)){
      echo 'Такой email уже есть<br>';
      $flag=1;
  } 


if($flag==1){
  include('../regback.php');
  echo'<br><input type="submit" id="afterbadreg" value="Назад">';
}

?>
<script>  
    $(document).ready(function(){  
      
        $('#afterbadreg').click(function(){  
            $.ajax({  
                url: "reg/main.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        });
         
    });
</script>

</center>