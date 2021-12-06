<?php
class db{
 
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "mydb";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}


function searchFaculty($conn,$table,$Name,$Interest,$Designation) {

     if($Name!="" && $Interest=="" && $Designation=="")
     {
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Name='". $Name."'");
     }
     else if($Name=="" && $Interest!="" && $Designation=="")
     {
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Interest='". $Interest."'");
     }
     else if($Name=="" && $Interest=="" && $Designation!="")
     {
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Designation='". $Designation."'");
     }
     else if($Name=="" && $Interest!="" && $Designation!="")
     {
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Interest='". $Interest."' AND Designation='".$Designation."'");
     }
     else if($Name!="" && $Interest=="" && $Designation!="")
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Name='". $Name."'AND Designation='". 
               $Designation."'");
     else if($Name!="" && $Interest!="" && $Designation=="")
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Interest='". $Interest."' AND Name='". 
               $Name."'");
     else if($Name!="" && $Interest!="" && $Designation!="")
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Name='". $Name."'AND Interest='". 
               $Interest."'AND Designation='".$Designation."'");
     return $sql;    
}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>