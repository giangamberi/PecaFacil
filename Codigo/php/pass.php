<?php

$con = mysqli_connect("localhost", "root", "", "reward");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$con_quality = mysqli_connect("localhost", "root", "", "quality");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}





?>