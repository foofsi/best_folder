<?php
require_once("config.php");

if(isset($_GET['id'])){

    $ID=$_GET['id'];
}


if(isset($_POST['User_ID'])
|| (isset($_POST['Staff_ID']))
|| (isset($_POST['Treatment_ID']))
|| (isset($_POST['Appointment_Date']))
|| (isset($_POST['Booking_Date']))
|| (isset($_POST['Additional_Info']))
|| (isset($_POST['Rating']))
|| (isset($_POST['Comments']))

{

    $User_ID=$_POST['User_ID'];
    $Staff_ID=$_POST['Staff_ID'];
    $Treatment_ID=$_POST['Treatment_ID'];
    $Appointment_Date=$_POST['Appointment_Date'];
    $Booking_Date=$_POST['Booking_Date'];
    $Additional_Info=$_POST['Additional_Info'];
    $Rating=$_POST['Rating'];
    $Comments=$_POST['Comments'];


$sql="UPDATE 'bookings' SET 'User_ID'= '".$User_ID."', 'Staff_ID'='".$Staff_ID."', 'Treatment_ID'='".$Treatment_ID."', 'Appointment_Date'='".$Appointment_Date."', 'Booking_Date'='".$Booking_Date."', 'Additional_Info'='".$Additional_Info."', 'Rating'='".$Rating."', 'Comments'='".$Comments."' WHERE ID=$ID";

    $mysqli->query($sql);


}

else {

  $res = $mysqli->query("SELECT * FROM bookings WHERE ID=$ID");
  $row = $res->fetch_assoc();

  $User_ID=$_POST['User_ID'];
  $Staff_ID=$_POST['Staff_ID'];
  $Treatment_ID=$_POST['Treatment_ID'];
  $Appointment_Date=$_POST['Appointment_Date'];
  $Booking_Date=$_POST['Booking_Date'];
  $Additional_Info=$_POST['Additional_Info'];
  $Rating=$_POST['Rating'];
  $Comments=$_POST['Comments'];

}
 ?>

 // I'll use HTML here to create the form.

 <form action="" method="post">
    <input type="int(11)" name="User_ID" placeholder="User ID" value= "<?= $User_ID;?>">
    <input type="int(11)" name="Staff_ID" placeholder="Staff ID" value= "<?= $Staff_ID;?>">
    <input type="int(11)" name="Treatment_ID" placeholder="Treatment ID" value= "<?= $Treatment_ID;?>">
    <input type="timestamp" name="Appointment_Date" placeholder="Appointment Date" value= "<?= $Appointment_Date;?>">
    <input type="timestamp" name="Booking_Date" placeholder="Booking Date" value= "<?= $Booking_Date;?>">
    <input type="text" name="Additional Info" placeholder="Use this field to notify us of any allergies you have to certain substances, or if you would like to have a special request" value= "<?= $Additional_Info;?>">
    <input type="decimal(2,1)" name="$Rating" placeholder="How would you rate our servies out of 5\?" value= "<?= $Rating;?>">
    <input type="text" name="Comments" placeholder="Kindly leave what you thought about us" value= "<?= $Comments;?>">
</form>
