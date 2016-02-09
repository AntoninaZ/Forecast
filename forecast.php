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
      <table class="left_table table">
        <tr class="tr_header">
        <td  colspan="2"></td>
        <td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td>
            <?php
              $date  = strtotime($dateF_arr[$i]);
              echo getDayUkr($date);
              echo  date(", d.m", $date);?>
            </td>
          <?php endfor; ?>
        </tr>
        <tr>
          <td>День</td>
          <td class="text-bold-g"><?php echo $tempMinDay_arr[3] . "°  " . $tempMaxDay_arr[3]."°"?></td>
        </tr>
        <tr>
          <td>Ніч</td>
          <td class="text-bold-gl"><?php echo $tempMinNight_arr[3] . "°  " . $tempMaxNight_arr[3]."°"?></td>
        </tr>
        <tr>
          <td>Вітер</td>
          <td colspan="2"><?php echo $windMin_arr[3] . " - " . $windMax_arr[3]." м/с"?></td>
        </tr>
        <tr>
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

      <!--  <?php include 'table_forecast.php'; ?>-->

    </div>
  </form>
 </body>
</html>
<?php
function getDayUkr($date){
 $days = array(
 'Нд' , 'Пн' , 'Вт' , 'Ср' ,
 'Чт' , 'Пт' , 'Сб');

 $num_day = (date('w', $date));
 $name_day = $days[$num_day];

 return $name_day;
}?>
