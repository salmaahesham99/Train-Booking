<?php
  
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "train booking";

  //create connection 
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  //check connection
  if(!$conn){
      die("connection failed:".mysqli_connect_error());
  }

?>

