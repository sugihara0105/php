<?php

function searchCityTime($city_name)
{
  require('config/cities.php');

  foreach ($cities as $aaaa) {
    if ($aaaa['name'] === $city_name) {
      $date_time = new DateTime('', new DateTimeZone($aaaa['time_zone']));
      $time = $date_time->format('H:i');
      $aaaa['time'] = $time;

      return $aaaa;
    }
  }
}

array_push($aaaa,"time"=>$time);