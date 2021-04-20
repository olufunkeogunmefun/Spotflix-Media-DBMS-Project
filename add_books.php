<?php

$book_name = $_POST["book_name"];
$author_name = $_POST["author_name"];
$genre = $_POST["Genre"];
$Date_borrowed = $_POST["Date_borrowed"];
$Date_returned = $_POST["Date_returned"];
$No_of_copies_rented = $_POST["No_of_copies_rented"];
$No_of_copies_bought = $_POST["No_of_copies_bought"];
$num = $_POST["num"];
$radioVal = $_POST["MyRadio"];


echo $book_name. "<br>". $author_name. "<br>". $genre. "<br>". $Date_borrowed. "<br>". $Date_returned. "<br>". $No_of_copies_rented. "<br>". $No_of_copies_bought. "<br>". $num. "<br>";

// Create connection
$con=mysqli_connect("localhost","root","spotflixmedia","spotflixmedia");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "INSERT INTO book_type ( Book_name , author_name , Genre , Date_borrowed , Date_returned, No_of_copies_rented, No_of_copies_bought) VALUES ('". $book_name. "','". $author_name."','".$genre. "','".$Date_borrowed . "','". $Date_returned. "','". $No_of_copies_rented. "','". $No_of_copies_bought ."')";

if($radioVal == "Audiobook")
{
    $sql2 = "INSERT INTO audiobooks ( Book_Name , chapter_length) VALUES ('". $book_name. "','". $num."')";
}

else if($radioVal == "Book")
{
    $sql2 = "INSERT INTO books ( Book_Name , album_length) VALUES ('". $book_name. "','". $num."')";
}

else
{
    $sql2 = "INSERT INTO ebooks ( Book_Name , chapter_page_count) VALUES ('". $book_name. "','". $num."')";
}

 

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  if (!mysqli_query($con,$sql2))
  {
  die('Error: ' . mysqli_error($con));
  }

  
echo "1 record added";

mysqli_close($con);
?>
