<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="forecast_style.css" rel="stylesheet">
 </head>
 <body>
  <div class="main_div">
    <div class="left_div">
  <!--  <a href="index.php" class="a_other">інші населені пункти</a>-->
      <div id="pic">

        <img src="img/sun_cloud.png" class="margin_main">

      </div>
      <div id="text">
        <p class="p_blue">Ужгород</p>
        <p class="p_gray">12/01/2016</p>
      </div>
        <table class="table_left">
          <tr>
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
            <td>2-4</td>
          </tr>
          <tr>
            <td><img src="img/other.png"></td>
            <td colspan="3">Туман</td>
          </tr>
        </table>
      </div>
      <?php include 'table_forecast.php'; ?>
    </div>
 </body>
</html>
