<html>
<body>

  <h2><?php echo "Дані відправлені";?><br/></h2>
  <?php
    print_r($_GET);
    echo "<br>";

    $dateForecast  = $_GET["forecast_date"];
    $minTempD      = $_GET["dayMin"];
    $maxTempD      = $_GET["dayMax"];
    $minTempN      = $_GET["nightMin"];
    $maxTempN      = $_GET["nightMax"];
    $windMin       = $_GET["windMin"];
    $windMax       = $_GET["windMax"];
    $windDir       = $_GET["direction"];
    $typeOfCloud   = $_GET["type_of_cloud"];
    $precipitation = $_GET["precipitation"];
    $otherAtmEff   = $_GET["other_atm_effects"];
    $synoptic      = $_GET["synoptic"];

    mysql_connect("localhost", "qwerty", "12345") or die (mysql_error ());
    mysql_select_db("db_forecast") or die(mysql_error());

    $sql = "INSERT INTO forecast " .
    "(date_f, temp_max_d, temp_min_d, temp_max_n, temp_min_n, type_cloud,
     wind_max, wind_min, wind_dir, precipitation, other_atm_effects, synoptic)
        VALUES ('$dateForecast', '$maxTempD', '$minTempD', '$maxTempN',
        '$minTempN', '$typeOfCloud', '$windMax', '$windMin', '$windDir',
        '$precipitation', '$otherAtmEff', '$synoptic')";
    echo $sql;

    mysql_query($sql) or die (mysql_error());

    mysql_close();

  ?>
  <br/>
  <br/>
<a href="index.php">Ввести прогноз на наступний день</a>
</body>
</html>
