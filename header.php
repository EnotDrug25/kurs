<div class="container">
      <nav>
      <button class="button-glav" onclick="loadpage('main.php')">Главная</button>
      <img src="https://suvenir64.ru/wp-content/uploads/2017/03/%D0%B3%D0%B5%D1%80%D0%B1-%D0%98%D0%B6%D0%B5%D0%B2%D1%81%D0%BA.png" alt="" style="width:140px; height: 150px;margin-bottom:10px;margin-left:-100px;">
      <h2 style="margin-left:-430px;padding-bottom:9px;">Электронная регистратура<br>Города Ижевск</h2>
      <div style="padding-right: 70px;">
				      <div id='divavtorhead'>	
								<button class="startavtorhead my-cab" id="startavtorhead" onclick="loadpage('join.php')" style="margin-left:-20%;padding-bottom:9px;">Личный кабинет
								</button>
									<div class="nameavtorhead" style="display: none">
									<?php
										echo $_COOKIE['username'].' '.$_COOKIE['usersurname'];
									?><br>
									<button id='logout' class="my-cab logoutbtn">Выйти</button>
									<?php include('isautorized.php');?>
					</div>
</div>
    </div>
          
      </div>
  </nav>
	<script type="text/javascript" src="js/avtorhead.js"></script>