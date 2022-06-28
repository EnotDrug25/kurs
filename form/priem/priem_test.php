<?php

	if (empty($_SESSION['auth']) or $_SESSION['auth'] == false) {
		
		if ( !empty($_COOKIE['login']) and !empty($_COOKIE['key']) ) {
			//Пишем логин и ключ из КУК в переменные (для удобства работы):
			$login = $_COOKIE['login']; 
			$key = $_COOKIE['key']; //ключ из кук (аналог пароля, в базе поле cookie)
			include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
			$query = "SELECT*FROM users WHERE login='$login' AND cookie='$key'";

						echo '<script type="text/javascript">
									 $.ajax({  
						                url: "form/priem/yes_sns.php",  
						                cache: false,  
						                success: function(html){  
						                    $("#content").html(html);  
						                }  
						            }); 
							$(".nameavtorhead").css("display","none");
						    $(".startavtorhead").css("display","block");
						</script>';
			
			$result = mysqli_fetch_assoc(mysqli_query($link, $query)); 

			if (!empty($result)) {
				session_start(); 

				$_SESSION['auth'] = true; 

				$pass = $_SESSION['password']; 
				$logins = $_SESSION['login']; 
				$arr=mysqli_fetch_array(mysqli_query($link, $query));
				if($arr['admin']==1){
				$auth="a";}
				else{$auth="u";}
				setcookie('auth', "$auth", time()+3600*24*30, "/");
				?>
<script type="text/javascript">

	$(".nameavtorhead").css("display","block");
    $(".startavtorhead").css("display","none");
</script>
				<?php
			}
			else {echo '<script type="text/javascript">
			 $.ajax({  
                url: "form/priem/priem.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            }); 
	$(".nameavtorhead").css("display","none");
    $(".startavtorhead").css("display","block");
</script>';}
		}
		else {
			echo '	<center><div class="prim-test-av">Для записи к врачу требуется авторизоваться.<br>
			Вы желаете авторизоваться?<br>'
			?>
			<input type="button" class="my-cab" value="Да" onclick="loadpage('join.php')">
			<input type="button" class="my-cab" value="Нет" onclick="loadpage('main.php')">
			<?php
			echo '</center></div>
		';}
	}
?>


