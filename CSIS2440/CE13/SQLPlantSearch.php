<?php

require_once 'DataBaseConnection.php';

// function to print distance 
function PlanetDistance($x1, $y1, $z1, $x2, $y2, $z2) {
    $dist = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2) + pow($z2 - $z1, 2) * 1.0);
    return $dist;
}
//use Get to get variables
$shipspeed = $_GET['speed'];
$planetID1 = $_GET['ID1'];
$planetID2 = $_GET['ID2'];

//Query first planet
$sql1 = "SELECT * FROM CSIS2440.Planets WHERE idPlanets = ". $planetID1;
$return = $con->query($sql1);

if(!$return) {
  die('planetID1: '. $planetID1 .' \n invalid query: '. $sql1);
}

while ($row = $return->fetch_assoc()) {
  $pname1 =  $row['PlanetName'];
  $x1 = $row['PosX'];
  $y1 = $row['PosY'];
  $z1 = $row['PosZ'];
  $desc1 = $row['PlanetDesc'];
  $active1 = $row['Active'];
}

//query second planet
$sql2 = "SELECT * FROM CSIS2440.Planets where idPlanets = ". $planetID2;
$return = $con->query($sql2);

if(!$return) {
  $message = 'whole query '. $sql2;
  echo $message;
  die('invalid query: '. $message);
}

while ($row = $return->fetch_assoc()) {
  $pname2 =  $row['PlanetName'];
  $x2 = $row['PosX'];
  $y2 = $row['PosY'];
  $z2 = $row['PosZ'];
  $desc2 = $row['PlanetDesc'];
  $active2 = $row['Active'];
}

//lets print everything out
echo "<div class=\"row\"><div class=\"col-md-offset-1 col-md-5\">";
