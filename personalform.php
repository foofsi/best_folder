<?php

 require_once("connect.php");

?>

<?php
if(isset($_POST['First_Name'], $_POST['Last_Name'], $_POST['Phone'], $_POST ['Username'], $_POST ['Password'] ))
 {
   $mysqli->query('INSERT INTO `users`(`First_Name`, `Last_Name`, `Phone`, `Username`, `Password`) VALUES ("'.$First_Name.'", "'.$Last_Name.'", "'.$Phone.'", "'.$Username.'", "'.$Password.'"');

  $First_Name= $_POST['First Name'];
  $Last_Name= $_POST['Last Name'];
  $Phone= $_POST['Phone'];
  $Username= $_POST['Username'];
  $Password= $_POST['Password'];

  echo "First Name: {$First_Name}  Last Name: {$Last_Name} Phone Number: {$Phone} Username: {$Username} Password: {$Password}";

}

?>

<form action = "index.php" method "post">
  <input type="text" name="First_Name" placeholder="First Name">
  <input type="text" name="Last_Name" placeholder="Last Name">
  <input type="text" name="Phone" placeholder="Phone Number">
  <input type="text" name="Username" placeholder="Username">
  <input type="text" name="Password" placeholder="Password">
  <input type="submit">
</form>
