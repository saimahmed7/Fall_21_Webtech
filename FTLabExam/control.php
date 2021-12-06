<?php

include "db.php";

            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->searchFaculty($conobj,"faculty",$_REQUEST['factName'],$_REQUEST['interest'],
               $_REQUEST['designation']);
            echo "<h3>Search List</h3><br>";
            if ($userQuery->num_rows > 0) {
                  echo "<table><thead><tr><th>Name</th><th>Research Interest</th><th>Designation</th></tr></thead>";                    
                  ?>
                  <tbody id="data">
                  <?php
                  while($row = $userQuery->fetch_assoc()) {


                     echo "<tr><td>".$row["Name"]."</td><td>".$row["Interest"]."</td><td>".
                     $row["Designation"] ."</td></tr>";
                  }
                  echo "</tbody></table>";
            } 
            else {
              echo "0 results";
            }   
?>
