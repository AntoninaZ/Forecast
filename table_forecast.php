<div class="right_div">
  <table class="right_table table">
    <tr class="tr_header">
    <td/>
      <?php for($i = 2; $i < 5; $i++): ?>
        <td>
        <?php
          $date  = mktime(0, 0, 0, date("m")  , date("d")  + $i, date("Y"));
          echo getDayUkr($date);
          echo  date(", d.m", $date);?>
        </td>
      <?php endfor; ?>
    </tr>
    <tr>
      <td rowspan="2"><img src="img/thermometer.png" align="ABSMIDDLE" width="20px"></td>
      <td>Ніч</td>
      <td>Ніч</td>
      <td>Ніч</td>
    </tr>
    <tr>
      <td>Ніч</td>
      <td>Ніч</td>
      <td>Ніч</td>
    </tr>
    <tr>
      <td><img src="img/east_arrow.png" width="20px"></td>
      <td>Ніч</td>
      <td>Ніч</td>
      <td>Ніч</td>
    </tr>
    <tr>
      <td><img src="img/other.png" width="20px"></td>
      <td>Ніч</td>
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
