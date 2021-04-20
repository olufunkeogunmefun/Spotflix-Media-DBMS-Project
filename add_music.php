<?php

$music_name = $_POST["name"];
$artist_name = $_POST["artist_name"];
$genre = $_POST["genre"];
$No_of_downloads = $_POST["No_of_downloads"];
$length = $_POST["length"];
$radioVal = $_POST["MyRadio"];


echo $music_name. "<br>". $artist_name. "<br>". $genre. "<br>". $No_of_downloads. "<br>". $length. "<br>";

// Create connection
$con=mysqli_connect("localhost","root","spotflixmedia","spotflixmedia");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $sql = "INSERT INTO music ( music_name , Artist_name , Genre , No_of_downloads) VALUES ('". $music_name. "','". $artist_name."','".$genre. "','".$No_of_downloads . "')";
 
if($radioVal = "Song")
{
    $sql3 = "INSERT INTO song ( song_name , song_length) VALUES ('". $music_name. "','". $length."')";
}

if($radioVal = "Album")
{
    $sql3 = "INSERT INTO album ( album_name , album_length) VALUES ('". $music_name. "','". $length."')";
}



if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  if (!mysqli_query($con,$sql3))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added";

mysqli_close($con);
?>
