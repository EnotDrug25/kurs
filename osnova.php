<!DOCTYPE HTML>
<html>
<title>Регистратура</title>
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/196/196144.png" type="image/x-icon">
 <head>
 <meta charset="utf-8">
 <link href="стиль.css" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="ajax/load.js"></script>
    <script type="text/javascript" src="ajax/prov.js"></script>
    <script type="text/javascript" src="ajax/ajax.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="ajax/jquery-3.3.1.min.js"></script>
  <script src="ajax/jquery.validate.js"></script>
 </head>
 <body>
  <div class="flex">
      <div class="column-menu">
        <aside> <!-- Боковая панель (сайдбар) -->
          <nav> <!-- Дополнительное меню страницы -->
            <ul>
            <a class="side-bar" style="color:green;" onclick="loadpage('main.php')">Главная</a><br>
            <a class="side-bar" onclick="loadpage('form/RabTime.php')">Список врачей</a><br>
            <a class="side-bar" onclick="loadpage('form/priem/priem_test.php')">Запись к врачу</a><br>
            <a class="side-bar" onclick="loadpage('uslugi.php')">Услуги</a><br>
            <a class="side-bar" onclick="loadpage('pos_test.php')">Мои посещения</a>
            </ul>
          </nav>
        </aside>
      </div>
            <main>
          <?php include('header.php'); ?>
          <div id="content"></div>
          <div id="result_form"></div>
                    <hr style="width:1703px;margin-left: -50px">
                     <?php include('footer.php'); ?>
          </main>
  </div>
  </body>
<script>
			loadpage('main.php');

	</script>
</html>