<?php
$con=mysqli_connect("localhost","root","","users"); // blom diisi sql
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"DELETE FROM cart");

mysqli_close($con);



?>