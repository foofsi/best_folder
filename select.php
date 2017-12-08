<?php

 require_once("connect.php");

$res = $mysqli->query("SELECT * FROM users");


for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    //echo " id = " . $row['ID'] . "\n";
    echo "<tr>";
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["First_Name"]."</td>";
    echo "<td>".$row["Last_Name"]."</td>";
    echo "<td>".$row["Phone"]."</td>";
    echo "<td>".$row["Username"]."</td>";
    echo "<td>".$row["Password"]."</td>";
    echo "</tr>";
  }



?>
