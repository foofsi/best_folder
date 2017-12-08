<?php
//phpinfo();

$mysqli = new mysqli("localhost", "root", "", "hydrospa");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$res = $mysqli->query("SELECT * FROM users");
$mysqli->query("UPDATE `users` SET `Phone`=911 WHERE ID=3");
$mysqli->query('INSERT INTO `users`(`First_Name`, `Last_Name`, `Phone`, `Username`, `Password`) VALUES ("Bill","Cosby","39982513", "billyboy123", "hehexd"');
$mysqli->query('DELETE FROM `users` WHERE ID=3');


  echo "<table style='width:100%;'>";
    echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Firstname</th>";
      echo "<th>Lastname</th>";
      echo "<th>Phone</th>";
      echo "<th>Username</th>";
      echo "<th>Password</th>";
    echo "</tr>";


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
  </table>
