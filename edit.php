<?php

 require_once("connect.php");

// check if the id is set by using $_GET[x], and then assign that to a variable (refer to delete.php)

if(isset($_GET['id']))
{
$ID= $_GET['id'];
}

// $mysqli->query('DELETE FROM `users` WHERE  ID='.$ID); and assign that to $res (refer to index.php)

$res=$mysqli->query('DELETE FROM `users` WHERE  ID='.$ID);


 $row = $res->fetch_assoc();




// if isset POST (refer to personalform.php) do all that then do msqli UPDATE thingy

if(isset($_POST['First_Name'])
 && (isset($_POST['Last_Name']))
  && (isset($_POST['Phone']))
   && (isset($_POST['Username']))
    && (isset($_POST['Password'])))

    {

     $First_Name= $_POST['First_Name'];
     $Last_Name= $_POST['Last_Name'];
     $Phone= $_POST['Phone'];
     $Username= $_POST['Username'];
     $Password= $_POST['Password'];

     $mysqli->query(UPDATE `users` SET `ID`=[$ID],`First_Name`=[$First_Name],`Last_Name`=$Last_Name],`Phone`=[$Phone],`Username`=[$Username],`Password`=[Password] WHERE ID=$res')');

   }



?>

<form action="" method="post">
  <input type="text" name="First_Name" placeholder="First Name" value= "<?= $First_Name;?>">
  <input type="text" name="Last_Name" placeholder="Last Name" value ="<?= $Last_Name;?>
  <input type="text" name="Phone" placeholder="Phone Number" value ="<?= $Phone;?>>
  <input type="text" name="Username" placeholder="Username" value ="<?= $Username;?>>
  <input type="text" name="Password" placeholder="Password" value ="<?= $Password;?>>
  <input type="submit">
</form>
