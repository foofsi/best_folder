<?php

require_once ("config.php");

$res =$mysqli->query("SELECT * FROM bookings");

//here i am making the table headers

    echo "<table style='width:100%;'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>User_ID</th>";
    echo "<th>Staff_ID</th>";
    echo "<th>Treatment_ID</th>";
    echo "<th>Appointment_Date</th>";
    echo "<th>Booking_Date</th>";
    echo "<th>Additional_Info</th>";
    echo "<th>Rating</th>";
    echo "<th>Comments</th>";
    echo "</tr>";


for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--){
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();

    echo "<tr>";
    echo "<td>" .$row["ID"]. "</td>";
    echo "<td>" .$row["User_ID"]. "</td>";
    echo "<td>" .$row["Staff_ID"]. "</td>";
    echo "<td>" .$row["Treatment_ID"]. "</td>";
    echo "<td>" .$row["Appointment_Date"]. "</td>";
    echo "<td>" .$row["Booking_Date"]. "</td>";
    echo "<td>" .$row["Additional_Info"]. "</td>";
    echo "<td>" .$row["Rating"]. "</td>";
    echo "<td>" .$row["Comments"]. "</td>";
    echo "<td> <a href='delete.php?id=".$row["ID"]."'>delete</a></td>";
    echo "<td> <a href='edit.php?id=".$row["ID"]."'>edit</a></td>";
    echo "</tr>";


}

 ?>
</table>
