<?php

$host="localhost";
$user="root";
$password="DBAdmin";
$dbname="CSIS2440";

$con = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());


if($con->connection_error == FALSE) {
  //echo "<h2>We Connected</h2>";
} else {
  echo $con->connection_error;
}

//print_r($con);

