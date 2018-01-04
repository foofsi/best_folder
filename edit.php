<?php

 require_once("connect.php");

 if(isset($_GET['id']))
 {
 $ID= $_GET['id'];
 }



if(isset($_POST['First_Name'])
 || (isset($_POST['Last_Name']))
  || (isset($_POST['Phone']))
   || (isset($_POST['Username']))
    || (isset($_POST['Password'])))

    {

     $First_Name= $_POST['First_Name'];
     $Last_Name= $_POST['Last_Name'];
     $Phone= $_POST['Phone'];
     $Username= $_POST['Username'];
     $Password= $_POST['Password'];

$sql="UPDATE `users` SET `First_Name`= '".$First_Name."',`Last_Name`= '".$Last_Name."',`Phone`= '".$Phone."',`Username`= '".$Username."',`Password`='".$Password."' WHERE ID=$ID";



     $mysqli->query($sql);

   }

else {

  $res = $mysqli->query("SELECT * FROM users WHERE ID=$ID");
  $row = $res->fetch_assoc();

  $First_Name= $row['First_Name'];
  $Last_Name= $row['Last_Name'];
  $Phone= $row['Phone'];
  $Username= $row['Username'];
  $Password= $row['Password'];

}

?>

<form action="" method="post">
  <input type="text" name="First_Name" placeholder="First Name" value= "<?= $First_Name;?>">
  <input type="text" name="Last_Name" placeholder="Last Name" value ="<?= $Last_Name;?>">
  <input type="text" name="Phone" placeholder="Phone Number" value ="<?= $Phone;?>">
  <input type="text" name="Username" placeholder="Username" value ="<?= $Username;?>">
  <input type="text" name="Password" placeholder="Password" value ="<?= $Password;?>">
  <input type="submit">
</form>
