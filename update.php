<?php

 require_once("connect.php");

$mysqli->query("UPDATE `users` SET `Phone`=911 WHERE ID=3");

?>
