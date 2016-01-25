  ﻿
  <html>
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <link rel='stylesheet' href='bootstrap.min.css' type='text/css' media='all'>
        <script src="bootstrap.min.js"></script>
        </head>
      <body>
        <div class="div_border">
          <?php $array = array("bar", "foo");?>

          <select name=“forecast_date ” class="btn-default btn-sm dropdown-toggle">
            <?php for($i = 0; $i < 5; $i++): ?>
              <option class="caret" value="<?php echo $i ?>">
                <?php
                  $date  = mktime(0, 0, 0, date("m")  , date("d") + $i, date("Y"));
                  echo  date("d.m.y", $date) ;?>
                </option>
            <?php endfor; ?>
            </select>

        <select name=“synoptic” class="right">
          <?php for($i = 0; $i < count($array); $i++): ?>
            <option value="<?php echo $i ?>"> <?php echo $array[$i]; ?></option>
          <?php endfor; ?>
        </select>

        День
          <input maxlength="2" size="2" type="text" id="myText" placeholder="Мін">
     		  <input maxlength="2" size="2" type="text" id="myText" placeholder="Мах">

        Ніч
      		<input maxlength="2" size="2" type="text" id="myText" placeholder="Мін">
     		  <input maxlength="2" size="2" type="text" id="myText" placeholder="Мах">

        <hr>

          <p class="s_p_margin">Тип хмарності</p>
          <form >
            <input type="radio" name="Тип хмарності" value="Безхмарно" checked>Безхмарно
            <input type="radio" name="Тип хмарності" value="Малохмарно">Малохмарно
      	    <input type="radio" name="Тип хмарності" value="Мінлива хмарність">Мінлива хмарність
       	    <input type="radio" name="Тип хмарності" value="Хмарно з проясненнями">Хмарно з проясненнями
      	    <input type="radio" name="Тип хмарності" value="Хмарно" >Хмарно
            <input type="radio" name="Тип хмарності" value="Пасмурно">Пасмурно
          </form>

        <hr>

          Вітер
          <input maxlength="2" size="2" type="text" id="myText" placeholder="Мін">-
      	  <input maxlength="2" size="2" type="text" id="myText" placeholder="Макс">
      		м/с<br>

          Напрямок
          <select >
      			<option value="Східний">Східний</option>
      			<option value="Північно Східний">Північно Східний</option>
      			<option value="Північний">Північний</option>
      			<option value="Північно Західний">Північно Західний</option>
      			<option value="Західний">Західний</option>
      			<option value="Південно Західний">Південно Західний</option>
      			<option value="Південний">Південний</option>
      			<option value="Південно Східний">Південно Східний</option>
      		</select>

          <hr>

          Опади
      		<select >
      			<option value="1">1</option>
      			<option value="2">2</option>
      			<option value="3">3</option>
      			<option value="4">4</option>
      			<option value="5">5</option>
      			<option value="6">6</option>
      			<option value="7">7</option>
      			<option value="8">8</option>
      		</select>

          <hr>

          <p>Інші атмосферні явища</p>
            <textarea maxlength="200" rows="4" cols="50">
            </textarea>

            <button type="button" >
          		Відправити
          	</button>
    </div>
  </body>
  </html>
