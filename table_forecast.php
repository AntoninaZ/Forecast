<div class="right_div">
  <table class="right_table table">
    <tr class="tr_header">
    <td/>
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
      <td rowspan="2"><img src="img/thermometer.png" align="ABSMIDDLE" width="20px"></td>
      <?php for($i = 2; $i >= 0; $i--): ?>
        <td><?php echo number_format(($tempMaxDay_arr[$i] + $tempMinDay_arr[$i]) / 2, 0)."°"; ?></td>
      <?php endfor; ?>
    </tr>
    <tr>
      <?php for($i = 2; $i >= 0; $i--): ?>
        <td><?php echo number_format(($tempMaxNight_arr[$i] + $tempMinNight_arr[$i]) / 2, 0)."°"; ?></td>
      <?php endfor; ?>
    </tr>
    <tr>
      <td><img src="img/east_arrow.png" width="20px"></td>
      <?php for($i = 2; $i >= 0; $i--): ?>
        <td>
          <?php echo number_format(($windMax_arr[$i] + $windMin_arr[$i]) / 2, 0); ?>
        </td>
      <?php endfor;?>
    </tr>
    <tr>
      <td></td>
      <td><img src="img/snow_gray.png"></td>
      <td>Ніч</td>
      <td>Ніч</td>
    </tr>
  </table>
</div>

<?php
function getDayUkr($date){
 $days = array(
 'Нд' , 'Пн' , 'Вт' , 'Ср' ,
 'Чт' , 'Пт' , 'Сб');

 $num_day = (date('w', $date));
 $name_day = $days[$num_day];

 return $name_day;
}?>
