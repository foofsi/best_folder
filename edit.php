<?php

 require_once("connect.php");

// check if the id is set by using $_GET[x], and then assign that to a variable (refer to delete.php)

//$mysqli->query('DELETE FROM `users` WHERE  ID='.$ID); and assign that to $res (refer to index.php)


 $row = $res->fetch_assoc();



// do this -> value= "<?= $First_Name;?(space) >"

// if isset POST (refer to personalform.php) do all that then do msqli UPDATE thingy





?>

<form action="" method="post">
  <input type="text" name="First_Name" placeholder="First Name" value= "<?= $First_Name;?>">
  <input type="text" name="Last_Name" placeholder="Last Name" value =>
  <input type="text" name="Phone" placeholder="Phone Number">
  <input type="text" name="Username" placeholder="Username">
  <input type="text" name="Password" placeholder="Password">
  <input type="submit">
</form>
