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
      <form action="result.php" method="get">
        <div class="div_border">

          <?php $synopt_arr = array("Синоптик1", "Синоптик2", "Синопти3");?>

          <div class="container-fluid div-sl">
            <p class="p_title_select left">Дата прогнозу <select name="forecast_date"  class="dropdown-toggle  btn btn-primary">
              <?php for($i = 0; $i < 5; $i++):
                $date  = mktime(0, 0, 0, date("m")  , date("d") + $i, date("Y"));?>
                <option type="date" class="caret" value="<?php echo date("y-m-d", $date) ?>">
                  <?php
                      echo date("d.m.y", $date) ;?>
                  </option>
              <?php endfor; ?>
            </select></p>
          <p class="p_title_select right">Синоптик <select name="synoptic" class="dropdown-toggle btn btn-primary">
            <?php for($i = 0; $i < count($synopt_arr); $i++): ?>
              <option type="text" value="<?php echo $synopt_arr[$i] ?>"> <?php echo $synopt_arr[$i];?></option>
            <?php endfor; ?>
          </select></p>
        </div>

        <div class="navbar-form">
          День
            <input maxlength="2" size="2" type="number" name="dayMin" class="form-control" placeholder="Мін" required/>
       		  <input maxlength="2" size="2" type="number" name="dayMax" class="form-control" placeholder="Мах" required/>


          Ніч
        		<input maxlength="2" size="2" type="number" name="nightMin" class="form-control" placeholder="Мін" required/>
       		  <input maxlength="2" size="2" type="number" name="nightMax" class="form-control" placeholder="Мах" required/>
        </div>


        <div class="navbar-form">
          Вітер
          <input maxlength="2" size="2" type="number" name="windMin" class="form-control" placeholder="Мін" required/>
      	  <input maxlength="2" size="2" type="number" name="windMax" class="form-control" placeholder="Макс" required/>

          <?php $direction_arr = array("Східний", "Північно Східний", "Північний",
          "Північно Західний", "Західний", "Південно Західний", "Південний", "Південно Східний");?>

          Напрямок
          <select name="direction">
            <?php for($i = 0; $i < count($direction_arr); $i++): ?>
              <option value="<?php echo $i?>"><?php echo $direction_arr[$i]; ?></option>
      			<?php endfor; ?>
      		</select>
        </div>

        <div class="div-radio">
        Тип хмарності
          <form name="type_of_cloud">
            <input type="radio" id="r1" name="type of cloud" class="r_margin" value="0" checked>
            <label for="r1"><span></span>Безхмарно</label>
            <input type="radio" id="r2" name="type of cloud" class="r_margin" value="1">
            <label for="r2"><span></span>Малохмарно</label>
      	    <input type="radio" id="r3" name="type of cloud" class="r_margin" value="2">
            <label for="r3"><span></span>Мінлива хмарність</label>
       	    <input type="radio" id="r4" name="type of cloud" class="r_margin" value="3">
            <label for="r4"><span></span>Хмарно з проясненнями</label>
      	    <input type="radio" id="r5" name="type of cloud" class="r_margin" value="4">
            <label for="r5"><span></span>Хмарно</label>
            <input type="radio" id="r6" name="type of cloud" class="r_margin" value="5">
            <label for="r6"><span></span>Пасмурно</label>
          </form>
        </div>

        <div class="navbar-form">
          <?php $precipitation_arr = array("Опади не очікуються", "Сніг",
           "Слабкий град", "Град", "Дощ", "Хуртовина", "Зливовий дощ",
           "Зливовий мокрий сніг", "Сніг", "Мокрий сніг", "Мряка", "Сильний дощ",
           "Сильний сніг");?>
          Опади
          <select name="precipitation">
            <?php for($i = 0; $i < count($precipitation_arr); $i++): ?>
              <option value="<?php echo $i?>"><?php echo $precipitation_arr[$i]?></option>
            <?php endfor; ?>
            </select>
        </div>

        <div class="navbar-form">
        <p>Інші атмосферні явища</p>
          <textarea name="other_atm_effects" maxlength="200" rows="4" cols="50"></textarea>
        </div>
        <div class="div-submit">
          <button type="submit" class="btn btn-primary btn-submit">
        		Відправити
        	</button>
        </div>
      </div>
      </form>
    </body>
  </html>
