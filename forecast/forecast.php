
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
      <table class="right_table b-border-table-style">
        <tr class="tr_header">
        <td class="td_main_t w-tr-table-style"></td>
        <td class="w-tr-table-style"></td>
        <?php for($i = 2; $i >= 0; $i--): ?>
            <td class="w-tr-table-style">
            <?php
              $date  = strtotime($dateF_arr[$i]);
              echo getDayUkr($date);
              echo  date(", d.m", $date);?>
            </td>
          <?php endfor; ?>
        </tr>
        <tr>
          <td class="td_main_t w-tr-table-style">День</td>
          <td class="text-bold-g td_main w-tr-table-style"><?php echo $tempMinDay_arr[3] . "°  " . $tempMaxDay_arr[3]."°"?></td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td class="w-tr-table-style"><?php echo number_format(($tempMaxDay_arr[$i] + $tempMinDay_arr[$i]) / 2, 0)."°"; ?></td>
          <?php endfor; ?>
        </tr>
        <tr>
          <td class="td_main_t w-tr-table-style">Ніч</td>
          <td class="text-bold-g td_main w-tr-table-style"><?php echo $tempMinNight_arr[3] . "°  " . $tempMaxNight_arr[3]."°"?></td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td class="w-tr-table-style"><?php echo number_format(($tempMaxNight_arr[$i] + $tempMinNight_arr[$i]) / 2, 0)."°"; ?></td>
          <?php endfor; ?>
        </tr>
        <tr>
          <td class="td_main_t w-tr-table-style">Вітер</td>
          <td class="text-bold-g td_main  w-tr-table-style">
            <?php echo $windMin_arr[3] . " - " . $windMax_arr[3]." м/с"?>
            <img src="<?php getWindSrcUlr($windDir_arr[3])?>" width="15px">
          </td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td  class="w-tr-table-style">
              <img src="<?php getWindSrcUlr($windDir_arr[$i])?>" width="10px">
              <?php echo number_format(($windMax_arr[$i] + $windMin_arr[$i]) / 2, 0); ?>
            </td>
          <?php endfor;?>
        </tr>
        <tr>
          <td class="td_main_t w-tr-table-style"></td>
          <td class="td_other_atm_eff w-tr-table-style"> <?php if (!empty($otherAtmEffects_arr[3]))
              { echo $otherAtmEffects_arr[3]; }?></td>
          <?php for($i = 2; $i >= 0; $i--): ?>
            <td class="w-tr-table-style">
              <img src="<?php getSrcUlrMini($typeOfCloud_arr[$i], $precipitation_arr[$i])?>">
            </td>
          <?php endfor;?>
        </tr>
        </table>
      </div>
    </div>
