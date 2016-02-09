<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='stylesheet' href='bootstrap.min.css' type='text/css'>
    <link href="forecast_style.css" rel="stylesheet">
 </head>
 <body>
  <?php include 'con_forecast.php';
    include 'func.php'; ?>

  <div class="main_div container-fluid">
    <div class="alert alert-warning">...</div>
    <div class="alert alert-danger">...</div>
    <p class="p_blue">Ужгород</p>
      <div class="pic">
        <p class="p_gray"><?php echo date("d.m.Y", strtotime($dateF_arr[3])).", ";
        echo getTitleForecast($typeOfCloud_arr[3], $precipitation_arr[3]); ?></p>
        <img src="<?php getMainSrcUlr($typeOfCloud_arr[3], $precipitation_arr[3]); ?>">
      </div>
      <div class="right_div">
      <table class="right_table">
        <tr class="tr_header">
        <td class="td_main_t"></td>
        <td></td>
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
          <td class="td_main_t">День</td>
          <td class="text-bold-g td_main"><?php echo $tempMinDay_arr[3] . "°  " . $tempMaxDay_arr[3]."°"?></td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td><?php echo number_format(($tempMaxDay_arr[$i] + $tempMinDay_arr[$i]) / 2, 0)."°"; ?></td>
          <?php endfor; ?>
        </tr>
        <tr>
          <td class="td_main_t">Ніч</td>
          <td class="text-bold-g td_main"><?php echo $tempMinNight_arr[3] . "°  " . $tempMaxNight_arr[3]."°"?></td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td><?php echo number_format(($tempMaxNight_arr[$i] + $tempMinNight_arr[$i]) / 2, 0)."°"; ?></td>
          <?php endfor; ?>
        </tr>
        <tr>
          <td class="td_main_t">Вітер</td>
          <td class="text-bold-g td_main">
            <?php echo $windMin_arr[3] . " - " . $windMax_arr[3]." м/с"?>
            <img src="<?php getWindSrcUlr($windDir_arr[3])?>" width="15px">
            </td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td>
              <img src="<?php getWindSrcUlr($windDir_arr[$i])?>" width="10px">
              <?php echo number_format(($windMax_arr[$i] + $windMin_arr[$i]) / 2, 0); ?>
            </td>
          <?php endfor;?>
        </tr>
        <tr>
          <td class="td_main_t"></td>
          <td class="td_other_atm_eff"> <?php if (!empty($otherAtmEffects_arr[3]))
              { echo $otherAtmEffects_arr[3]; }?></td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td>
              <img src="<?php getSrcUlrMini($typeOfCloud_arr[$i], $precipitation_arr[$i])?>">
            </td>
          <?php endfor;?>
        </tr>
        </table>
      </div>
    </div>
 </body>
</html>
