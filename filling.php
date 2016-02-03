<html>
<body>

  <?php
  mysql_connect("localhost", "qwerty", "12345") or die (mysql_error ());
  mysql_select_db("db_forecast") or die(mysql_error());
  $strSQL = "SELECT *
FROM  `forecast`
ORDER BY  `forecast`.`index` DESC
LIMIT 0 , 4";
  $rs = mysql_query($strSQL);

  $dateF_arr = array();
  $tempMaxDay_arr = array();
  $tempMinDay_arr = array();
  $tempMaxNight_arr = array();
  $tempMinNight_arr= array();
  $typeOfCloud_arr = array();
  $windMax_arr = array();
  $windMin_arr = array();
  $windDir_arr = array();
  $precipitation_arr = array();
  $otherAtmEffects_arr = array();

  while($row = mysql_fetch_array($rs)) {
  	array_push($dateF_arr,  $row['date_f']);
    array_push($tempMaxDay_arr,  $row['temp_max_d']);
    array_push($tempMinDay_arr,  $row['temp_min_d']);
    array_push($tempMaxNight_arr,  $row['temp_max_n']);
    array_push($tempMinNight_arr,  $row['temp_min_n']);
    array_push($typeOfCloud_arr,  $row['type_cloud']);
    array_push($windMax_arr,  $row['wind_max']);
    array_push($windMin_arr,  $row['wind_min']);
    array_push($windDir_arr,  $row['wind_dir']);
    array_push($precipitation_arr,  $row['precipitation']);
    array_push($otherAtmEffects_arr,  $row['other_atm_effects']);
  }
	mysql_close();

  ?>
</boby>
</html>
