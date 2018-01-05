<?php

$mysqli = new mysqli ("localhost", "root", "", "hydrospa");
if ($mysqli->connect_errorno){

    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" .$mysqli->connect_error;
  
}



 ?>
