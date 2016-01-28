  ﻿
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel='stylesheet' href='bootstrap.min.css' type='text/css' media='all'>
      <link href="style.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery.min.js"></script>
      <script src="bootstrap.min.js"></script>
      </head>
    <body>
      <form action="result.php" method="post" style="">
        <div class="div_border">

          <?php $synopt_arr = array("Синоптик1", "Синоптик2", "Синопти3");?>

          <div class="container-fluid div-sl">
            <p class="p_title_select left">Дата прогнозу <select name=“forecast_date ” class="dropdown-toggle  btn btn-primary">
              <?php for($i = 0; $i < 5; $i++): ?>
                <option class="caret" value="<?php echo $i ?>">
                  <?php
                    $date  = mktime(0, 0, 0, date("m")  , date("d") + $i, date("Y"));
                    echo  date("d.m.y", $date) ;?>
                  </option>
              <?php endfor; ?>
            </select></p>
          <p class="p_title_select right">Синоптик <select name=“synoptic” class="dropdown-toggle btn btn-primary">
            <?php for($i = 0; $i < count($synopt_arr); $i++): ?>
              <option value="<?php echo $i ?>"> <?php echo $synopt_arr[$i]; ?></option>
            <?php endfor; ?>
          </select></p>
        </div>

        <div class="navbar-form">
          День
            <input maxlength="2" size="2" type="text" name="dayMin" class="form-control input-text" placeholder="Мін">
       		  <input maxlength="2" size="2" type="text" name="dayMax" class="form-control input-text" placeholder="Мах">
        </div>
        <div class="navbar-form">
          Ніч
        		<input maxlength="2" size="2" type="text" name="nightMin" class="form-control input-text"  placeholder="Мін">
       		  <input maxlength="2" size="2" type="text" name="nightMax" class="form-control input-text" placeholder="Мах">
        </div>


        <div class="navbar-form">
          Вітер
          <input maxlength="2" size="2" type="text" name="windMin" class="form-control input-text" placeholder="Мін">
      	  <input maxlength="2" size="2" type="text" name="windMin" class="form-control input-text" placeholder="Макс">

          <?php $direction_arr = array("Східний", "Північно Східний", "Північний",
          "Північно Західний", "Західний", "Південно Західний", "Південний", "Південно Східний");?>

          Напрямок
          <select>
            <?php for($i = 0; $i < count($direction_arr); $i++): ?>
              <option value="<?php echo $i ?>"> <?php echo $direction_arr[$i]; ?></option>
      			<?php endfor; ?>
      		</select>
        </div>

        <div class="div-radio">
        Тип хмарності
          <form>
            <input type="radio" id="r1" name="Type of cloud" class="r_margin" value="0" checked>
            <label for="r1"><span></span>Безхмарно</label>
            <input type="radio" id="r2" name="Type of cloud" class="r_margin" value="1">
            <label for="r2"><span></span>Малохмарно</label>
      	    <input type="radio" id="r3" name="Type of cloud" class="r_margin" value="2">
            <label for="r3"><span></span>Мінлива хмарність</label>
       	    <input type="radio" id="r4" name="Type of cloud" class="r_margin" value="3">
            <label for="r4"><span></span>Хмарно з проясненнями</label>
      	    <input type="radio" id="r5" name="Type of cloud" class="r_margin" value="4">
            <label for="r5"><span></span>Хмарно</label>
            <input type="radio" id="r6" name="Type of cloud" class="r_margin" value="5">
            <label for="r6"><span></span>Пасмурно</label>
          </form>
        </div>

        <div class="navbar-form">
          <?php $precipitation_arr = array("Синоптик1", "Синоптик2", "Синопти3");?>
          Опади
          <select>
            <?php for($i = 0; $i < count($precipitation_arr); $i++): ?>
              <option value="<?php echo $i?>"><?php echo $precipitation_arr[$i]?></option>
            <?php endfor; ?>
            </select>
        </div>

        <div class="navbar-form">
        <p>Інші атмосферні явища</p>
          <textarea maxlength="200" rows="4" cols="50">
          </textarea>
        </div>
          <button type="submit" class="btn btn-primary btn-submit">
        		Відправити
        	</button>
            <?php

    // Соединение с сервером БД
    mysql_connect("localhost", "qwerty", "12345") or die (mysql_error ());

    // Выбор БД
    mysql_select_db("db_forecast") or die(mysql_error());

    // Построение SQL-оператора

    $strSQL = "INSERT INTO forecast(";

    $strSQL = $strSQL . "date_f) ";

    $strSQL = $strSQL . "VALUES(";

    $strSQL = $strSQL . "'2015-12-01')";

    // SQL-оператор выполняется
    mysql_query($strSQL) or die (mysql_error());

    // Закрытие соединения
    mysql_close();
    ?>
    </div>
    </form>

    </body>
  </html>
