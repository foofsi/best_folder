<?php

$host="localhost";
$user="root";
$pass="";
$table="hydrospa";


$mysqli = new mysqli ("$host", "$user", "$pass", "$table");
if ($mysqli->connect_errorno){

    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" .$mysqli->connect_error;

}


 ?>
