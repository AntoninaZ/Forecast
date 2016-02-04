
  <?php
  function getMainSrcUlr($param) {
    switch ($param) {
    case 0: echo "img/sun.png"; break;
    case 1: echo "img/cloud.png"; break;
    case 2: echo "img/cloud.png"; break;
    case 3: echo "img/snow.png"; break;
    case 4: echo "img/cloud.png"; break;
    case 11: echo "img/snow.png"; break;
    case 21: echo "img/south_arrow.png"; break;
    case 41: echo "img/south_east_arrow.png"; break;
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
  ?>
