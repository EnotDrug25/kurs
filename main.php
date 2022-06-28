<center>
	<div class="main">
		 	<div class="inf-block">
			 	<img src="https://new.2dr.ru/assets/img/common/sputnik-v-big.jpg" class="banner">
			 	<div class="main-menu">
				    <a class="main-bat1" onclick="loadpage('form/RabTime.php')"> 
				    	<img src="https://cdn-icons-png.flaticon.com/512/3056/3056783.png" alt="" style="width:80px; height: 80px;margin-bottom:10px;margin-top: 5px"><br>
				    	 Список врачей
				    </a><br>
				    <a class="main-bat2" onclick="loadpage('form/priem/priem_test.php')">
				    	<img src="https://cdn-icons-png.flaticon.com/512/3056/3056763.png" alt="" style="width:80px; height: 80px;margin-bottom:10px;margin-top: 5px"><br>
				   		 Запись к врачу
					</a><br>
				    <a class="main-bat3" onclick="loadpage('uslugi.php')">
				    		<img src="https://cdn-icons-png.flaticon.com/512/4706/4706833.png" alt="" style="width:80px; height: 80px;margin-bottom:10px;margin-top: 5px"><br>
				    		Услуги
					</a><br>
				</div>
				<div class="main-menu2">
					 <a class="main-bat1" onclick="loadpage('pos_test.php')">
					    		<img src="https://cdn-icons-png.flaticon.com/512/117/117419.png" alt="" style="width:80px; height: 80px;margin-bottom:10px;margin-top: 5px"><br>
					    		Мои посещения
						</a><br>
					 <?php
									 if (isset($_COOKIE['auth']) and $_COOKIE['auth'] == "a") {echo"
									           
									          
 										 <a class='main-bat2 vivod'>
 										 	<img src='https://cdn-icons-png.flaticon.com/512/130/130291.png' style='width:80px; height: 80px;margin-bottom:10px;margin-top: 5px'><br>
Список пациентов</a><br>

									  ";}?>
				</div>
				<br>
				 <hr style="width:1703px;margin-left: -50px">
				 <div class="dop-inf">
Операторы горячей линии:<br>
<li>примут ваши замечания и предложения по улучшению работы сервиса «Электронная регистратура»;<br>
<li>предоставят полную информацию о возможных способах записи на приём к врачу;<br>
<li>помогут в решении проблем, возникших во время записи на приём к врачу через интернет, по телефону или в регистратуре медицинского учреждения.<br>
			</div>
			</div>
</div>
</center>
<script>
	
	        $('.vivod').click(function(){  
                $.post('vivod_pacient.php', {}, function(html){
                $("#content").html(html);
                });
         });
</script>