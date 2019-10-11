<?php

$update = "UPDATE `CSIS2440`.`Planets` SET `Active` = 'Y' ";
if($desc != "A short description of the planet"){
 $update .= ", `PlanetDesc` = '$desc'"; 
}

$update .= "WHERE (`PlanetName` = '" .$name . "')";
  $success = $con->query($update);

  if($success == FALSE) {
    $failmess = "Whole query" . $insert . "<br>";
    echo $failmess;
    print('Invalid query: '.mysqli_error($con). '<br>');
  } else {
    echo $name . " was given a space station. <br>";
  }

