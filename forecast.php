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
          <p class="p_gray"><?php echo date("d.m.Y", strtotime($dateF_arr[3])); ?></p>
      </div>
      <div class="pic">
        <img src="<?php getMainSrcUlr($typeOfCloud_arr[3]); ?>">
      </div>

      <table class="left_table">
        <tr >
          <td colspan="2">День</td>
          <td colspan="2">Ніч</td>
        </tr>
        <tr>
          <td><img src="img/thermometer.png"></td>
          <td><?php echo $tempMinDay_arr[3] . " - " . $tempMaxDay_arr[3]?></td>
          <td><img src="img/thermometer.png"></td>
          <td><?php echo $tempMinNight_arr[3] . " - " . $tempMaxNight_arr[3]?></td>
        </tr>
        <tr>
          <td><img src="<?php getWindSrcUlr($windDir_arr[3]) ?>" width="30px"></td>
          <td colspan="3"><?php echo $windMin_arr[3] . " - " . $windMax_arr[3]?></td>
        </tr>
        <tr>
          <td><img src="img/precipitation.png"></td>
          <td colspan="3"><?php echo getPrecipitationSrt($precipitation_arr[3]);?></td>
        </tr>
        <?php if (!isset($otherAtmEffects_arr[3])) {?>
        <tr>
          <td><img src="img/other.png"></td>
          <td colspan="3"><?php echo $otherAtmEffects_arr[3]?></td>
        </tr>
          <?php } ?>
      </table>
      </div>

        <?php include 'table_forecast.php'; ?>

    </div>
  </form>
 </body>
</html>
