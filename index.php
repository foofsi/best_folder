<?php
//phpinfo();

$mysqli = new mysqli("localhost", "root", "", "hydrospa");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$res = $mysqli->query("SELECT * FROM users");


  echo "<table style='width:100%;'>";
    echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Firstname</th>";
      echo "<th>Lastname</th>";
      echo "<th>Phone</th>";
      echo "<th>Username</th>";
      echo "<th>Password</th>";
      echo "<th>Delete</th>";
      echo "<th>Edit</th>";
    echo "</tr>";



  for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
      $res->data_seek($row_no);
      $row = $res->fetch_assoc();

      echo "<tr>";
      echo "<td>".$row["ID"]."</td>";
      echo "<td>".$row["First_Name"]."</td>";
      echo "<td>".$row["Last_Name"]."</td>";
      echo "<td>".$row["Phone"]."</td>";
      echo "<td>".$row["Username"]."</td>";
      echo "<td>".$row["Password"]."</td>";
      echo "<td> <a href='delete.php?id=".$row["ID"]."'>delete</a></td>";
      echo '<td> <a href="edit.php?id='.$row["ID"].'">edit</a></td>';

      echo "</tr>";
    }




   ?>
  </table>
