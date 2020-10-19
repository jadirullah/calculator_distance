<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) { 

  $theta = $lon1 - $lon2; 
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
  $dist = acos($dist); 
  $dist = rad2deg($dist); 
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344); 
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}



$lat1 = -6.227446;
$long1 = 107.0842764;

$lat2 = -6.297039;
$long2 = 107.027567;

echo distance($lat1, $long1, $lat2, $long2, "m") . " miles<br>";
echo distance($lat1, $long1, $lat2, $long2, "k") . " kilometers<br>";
echo distance($lat1, $long1, $lat2, $long2, "n") . " nautical miles<br>";

?>