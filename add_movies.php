<?php

$movie_name = $_POST["movie_name"];
$director_name = $_POST["director_name"];
$genre = $_POST["genre"];
$rating = $_POST["Rating"];
$No_of_copies_rented = $_POST["No_of_copies_rented"];
$Date_borrowed = $_POST["Date_borrowed"];
$Date_returned = $_POST["Date_returned"];

echo $movie_name. "<br>". $director_name. "<br>". $genre. "<br>". $rating. "<br>". $No_of_copies_rented. "<br>". $Date_borrowed. "<br>". $Date_returned. "<br>";

// Create connection
$con=mysqli_connect("localhost","root","spotflixmedia","spotflixmedia");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $sql = "INSERT INTO movies ( movie_name , Director_name , Genre , Rating , No_of_copies_rented, Date_borrowed, Date_returned) VALUES ('". $movie_name. "','". $director_name."','".$genre. "','".$rating . "','". $No_of_copies_rented. "','". $Date_borrowed. "','". $Date_returned ."')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added";

mysqli_close($con);
?>
