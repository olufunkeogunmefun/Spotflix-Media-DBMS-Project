
<?php

$name = $_POST["Name"];
$email = $_POST["Email"];

echo $name. "<br>". $email. "<br>";


// Create connection
$con=mysqli_connect("localhost","root","spotflixmedia","spotflixmedia");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql = "INSERT INTO customer (Name, Email) VALUES ('". $name."','". $email ."')";
 
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added";

mysqli_close($con);
?>

