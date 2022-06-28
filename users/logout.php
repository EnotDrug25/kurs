<?php
session_start();
	//Если переменная auth из сессии не пуста и равна true, то...
	if (!empty($_SESSION['auth']) and $_SESSION['auth']) {
		
		session_destroy(); //разрушаем сессию для пользователя

		//Удаляем куки авторизации путем установления времени их жизни на текущий момент:
		foreach($_COOKIE as $key => $value) setcookie($key, '', time() - 3600, '/');

		session_start();
		$_SESSION['password']=0; 
		$_SESSION['login']=0; 
	
?>
<script type="text/javascript">
	$(".nameavtorhead").css("display","none");
    $(".startavtorhead").css("display","block");
</script>
<?php }

?>

<script>
	location.reload();
</script>
