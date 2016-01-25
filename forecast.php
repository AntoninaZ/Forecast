<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='stylesheet' href='bootstrap.min.css' type='text/css'>
    <link href="forecast_style.css" rel="stylesheet">
 </head>
 <body>

  <div class="main_div container-fluid">
    <div class="alert alert-warning">...</div>
    <div class="alert alert-danger">...</div>

    <div class="left_div">
  <!--  <a href="index.php" class="a_other">інші населені пункти</a>-->
      <div id="pic">
        <img src="img/sun_cloud.png" class="weather_img">
      </div>


        <p class="p_blue">Ужгород</p>
        <p class="p_gray">
          <?php
          $date  = mktime(0, 0, 0, date("m")  , date("d") + 1, date("Y"));
          echo  date("d.m.y", $date) ;?></p>

  <div id="text">
      <table class="left_table">
        <tr class="tr_header">
          <td colspan="2">День</td>
          <td colspan="2">Ніч</td>
        </tr>
        <tr>
          <td><img src="img/thermometer.png"></td>
          <td>2-4</td>
          <td><img src="img/thermometer.png"></td>
          <td>2-4</td>
        </tr>
        <tr>
          <td><img src="img/east_arrow.png" width="30px"></td>
          <td colspan="3">2-4</td>
        </tr>
        <tr>
          <td><img src="img/precipitation.png"></td>
          <td colspan="3">Мінлива хма</td>
        </tr>
        <tr>
          <td><img src="img/other.png"></td>
          <td colspan="3">Туман</td>
        </tr>
      </table>
      </div>
</div>
        <?php include 'table_forecast.php'; ?>

    </div>
 </body>
</html>
