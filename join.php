
<center>
<div class="join-bord" id="border" style="margin-left: -50px"><br><br>
<p>Вход</p>
	<div class="wrapper">
 		    <form method="POST" id="login">
 		
    		<input type="text" id="loginavt" name="loginavt"  placeholder="Введите логин" ><br><br>
			<input type="password" id="passavt" name="passavt"  placeholder="Введите пароль" ><br><br>
	</div>
			<input type="submit" name="jointbtn" class="regis" id="btnloginavt" value="Войти" onclick="startlogin();">
		</form>

    <input type="button" class="regis" value="Регистрация" onclick="loadpage('registr.php')">
    <input type="button" class="regis" value="Забыли пароль?" onclick="loadpage('losepass.php')">
</div>
</center>

<script type="text/javascript" src="js/loginsends.js"></script>