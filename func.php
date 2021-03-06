
  <?php
  function getMainSrcUlr($paramCloud, $paramPrecipitation) {
    switch ($paramPrecipitation) {
      case 0:
        switch ($paramCloud) {
          case 0:
           echo "img/sun.png"; break;
          case 1: case 2: case 4: case 5:
           echo "img/cloud.png"; break;
          case 3:
            echo "img/sun_cloud.png"; break;
        } break;
      case 1: case 5: case 7: case 8: case 9: case 12:
        echo "img/snow.png"; break;
      case 2: case 3: case 4: case 6: case 11:
        echo "img/rain.png"; break;
      default:
        break;
    }
  }

  function getWindSrcUlr($param) {
    switch ($param) {
    case 0: echo "img/east_arrow.png"; break;
    case 1: echo "img/north_east_arrow.png"; break;
    case 2: echo "img/north_arrow.png"; break;
    case 3: echo "img/north_west_arrow.png"; break;
    case 4: echo "img/west_arrow.png"; break;
    case 5: echo "img/south_west_arrow.png"; break;
    case 6: echo "img/south_arrow.png"; break;
    case 7: echo "img/south_east_arrow.png"; break;
    }
  }

  function getTitleForecast($paramCloud, $paramPrecipitation) {
    switch ($paramPrecipitation) {
      case 0:
        switch ($paramCloud) {
          case 0:
           echo "Ясно"; break;
          case 1: case 2: case 4: case 5:
           echo "Хмарно"; break;
          case 3:
            echo "Хмарно з проясненням"; break;
        } break;
      case 1: case 5: case 7: case 8: case 9: case 12:
        echo "Сніг"; break;
      case 2: case 3: case 4: case 6: case 11:
        echo "Дощ"; break;
      default:
        break;
    }
  }

  function getPrecipitationSrt($param) {
    switch ($param) {
    case 0: echo "Опади не очікуються"; break;
    case 1: echo "Сніг"; break;
    case 2: echo "Слабкий град"; break;
    case 3: echo "Град"; break;
    case 4: echo "Дощ"; break;
    case 5: echo "Хуртовина"; break;
    case 6: echo "Зливовий дощ"; break;
    case 7: echo "Зливовий мокрий сніг"; break;
    case 8: echo "Сніг"; break;
    case 9: echo "Мокрий сніг"; break;
    case 10: echo "Мряка"; break;
    case 10: echo "Сильний дощ"; break;
    case 10: echo "Сильний сніг"; break;
    }
  }

  function getSrcUlrMini($paramCloud, $paramPrecipitation) {
    switch ($paramPrecipitation) {
      case 0:
        switch ($paramCloud) {
          case 0:
           echo "img/sun_gray.png"; break;
          case 1: case 2: case 4: case 5:
           echo "img/cloud_gray.png"; break;
          case 3:
            echo "img/sun_cloud_gray.png"; break;
        } break;
      case 1: case 5: case 7: case 8: case 9: case 12:
        echo "img/snow_gray.png"; break;
      case 2: case 3: case 4: case 6: case 11:
        echo "img/rain_gray.png"; break;
      default:
        break;
    }
  }
  ?>
