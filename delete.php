<?php

 require_once("connect.php");

print_r($_GET);

if(isset($_GET['id']))
{
$ID= $_GET['id'];
}
$mysqli->query('DELETE FROM `users` WHERE  ID='.$ID);

 ?>
