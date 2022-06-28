<center>
<content>
	<br><br>
     <div class="polereg">

        <form method="POST" id="reg" action="javascript:void(null);" onsubmit="sendstartreg()">
            <br>Фамилия:<br>
             <input type="text" id="surn" name="surn" placeholder="Фамилия"   size="25" class="FirUp">
            <div id="surnerr"><br></div>
             Имя:
            <input type="text" id="name" name="name" placeholder="Имя"  size="15" class="FirUp">
            <div id="nameerr"><br></div>
             Отчество:
            <input type="text" id="otch" name="otch" placeholder="Отчество"  size="20" class="FirUp">
            <div id="otcherr"><br></div>
             Электронная почта:
            <input type="email" id="email" name="email" placeholder="Email"  size="25">
            <div id="emailerr"><br></div>
             Дата рождения:<br>
            <input type="date" id="data" name="data" placeholder="Дата Рождения" ><br>
            <div id="dateerr"><br></div>
             Логин:<br>
            <input type="text" id="login" name="login" placeholder="Логин"  size="15">
            <div id="loginerr"><br></div>
             Пароль:
            <input type="password" id="pass" name="pass" placeholder="Пароль"  size="15">
            <div id="passerr"><br></div>
             Подтвердите пароль:
            <input type="password" id="pass2" name="pass2" placeholder="Пароль"  size="15">
            <div id="pass2err"></div> <br>
            <input type="button" id="buttonok" value="ОК" class="forget" onclick="contr_avtor();">

            <button id="buttonreg" style="display: none" class="forget">Регистрация</button>
        </form>
    </div> <br>
      
    
</content>
<script>

      let input_name2 = document.getElementById('name');
    input_name2.addEventListener('input',()=> {
        input_name2.value = input_name2.value.replace(/[^А-Яа-яЁё]/,'');
    });




      let input_name3 = document.getElementById('otch');
    input_name3.addEventListener('input',()=> {
        input_name3.value = input_name3.value.replace(/[^А-Яа-яЁё]/,'');
    });




     let input_name4 = document.getElementById('surn');
    input_name4.addEventListener('input',()=> {
        input_name4.value = input_name4.value.replace(/[^А-Яа-яЁё]/,'');
    });

</script>
</center>