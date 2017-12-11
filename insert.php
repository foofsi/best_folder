<?php

 require_once("connect.php");

$mysqli->query('INSERT INTO `users`(`First_Name`, `Last_Name`, `Phone`, `Username`, `Password`) VALUES ("Bill","Cosby","39982513", "billyboy12345", "hehexd"');

?>
