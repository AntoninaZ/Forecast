<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='stylesheet' href='bootstrap.min.css' type='text/css'>
    <link href="forecast_style.css" rel="stylesheet">
 </head>
 <body>
<form action="filling.php" method="post">
    <?php include 'filling.php';
    include 'func.php'; ?>

  <div class="main_div container-fluid">
    <div class="alert alert-warning">...</div>
    <div class="alert alert-danger">...</div>

    <div class="left_div">
      <div class="right_title_div">
        <p class="p_blue">Ужгород</p>
        <p class="p_gray"><?php echo date("d.m.Y", strtotime($dateF_arr[3])).", ";
        echo getTitleForecast($typeOfCloud_arr[3], $precipitation_arr[3]); ?></p>
      </div>
      <div class="pic">
        <img src="<?php getMainSrcUlr($typeOfCloud_arr[3], $precipitation_arr[3]); ?>">
      </div>
      <table class="left_table">
          <td><img src="img/thermometer.png"></td>
          <td class="text-bold-g"><?php echo $tempMinDay_arr[3] . "°  " . $tempMaxDay_arr[3]."°"?></td>
          <td class="td-lb text-bold-gl"><?php echo $tempMinNight_arr[3] . "°  " . $tempMaxNight_arr[3]."°"?></td>
        </tr>
        <tr>
          <td><img src="<?php getWindSrcUlr($windDir_arr[3])?>" width="30px"></td>
          <td colspan="2"><?php echo $windMin_arr[3] . " - " . $windMax_arr[3]." м/с"?></td>
        </tr>
        <tr>
          <td><img src="img/precipitation.png"></td>
          <td colspan="2"><?php echo getPrecipitationSrt($precipitation_arr[3]);?></td>
        </tr>
        <?php if (!empty($otherAtmEffects_arr[3])) {?>
        <tr>
          <td><img src="img/other.png"></td>
          <td colspan="2"><?php echo $otherAtmEffects_arr[3]?></td>
        </tr>
          <?php } ?>
      </table>
      </div>

        <?php include 'table_forecast.php'; ?>

    </div>
  </form>
 </body>
</html>
