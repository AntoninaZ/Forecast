<html>
<body>

  <?php
  mysql_connect("localhost", "qwerty", "12345") or die (mysql_error ());
  mysql_select_db("db_forecast") or die(mysql_error());

  $sql = "SELECT date_f, temp_max_d, temp_min_d, temp_max_n, temp_min_n, type_cloud,
   wind_max, wind_min, wind_dir, precipitation, other_atm_effects, synoptic FROM forecast";
  echo $sql;

  mysql_query($sql) or die (mysql_error());

  mysql_close();
  ?>
</boby>
</html>
