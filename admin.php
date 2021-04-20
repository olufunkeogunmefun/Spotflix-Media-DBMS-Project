<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Admin Page | Spotflix Media</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Train One'rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <style>
    /* code for profile pic:*/
    /* img src = "JaneSmith.svg" style= "height:40px; width:40px" */

    /*code for cart:*/
    /* <li><a href="#" id ="cart"><i class="fa fa-shopping-cart"></i> 🛒Cart <span class="badge">3</span></a></li> */



    /* Remove the navbar's default margin-bottom and rounded borders */
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      padding: 0px 0px;
      background-color: DarkSlateGrey;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    </style>

  <body style = "background-color: white;">
   
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

          <ul class="nav navbar-nav">
            <li><a href="admin_home.php"><img src = "Logo b.svg" style= "height:40px; width:40px;"></a></li>
            <li><a href="admin_categories.php" style= "font-size:110%; color: white; padding:20px;">Categories</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <img src="Admin.svg" style="width:70%;margin-top:7px;">
            
          </ul>

        </div>

        

      </div>

    </nav>

    <h2 style="padding:20px;color:black"><u>Admin Profile</u></h2>

    <?php

        // Create connection
        $con=mysqli_connect("localhost","root","spotflixmedia","spotflixmedia");

        // Check connection
        if (mysqli_connect_errno($con))
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }     

        $result1 = mysqli_query($con,"SELECT * FROM administrator");



        while($data = mysqli_fetch_array($result1))
        {
        echo "Admin ID: ";
        echo $data['Admin_id'] . "<br>";
        echo "Name: ";
        echo $data['AdminName'] . "<br>";
        echo "Start Date: ";
        echo $data['Start_Date'] . "<br>";
        }

       
        mysqli_close($con);
        ?>

    <h2 style="padding:20px;color:black"><u>Customer Information</u></h2>
    <div>
                        
        </div>

        <?php

        // Create connection
        $con=mysqli_connect("localhost","root","spotflixmedia","spotflixmedia");

        // Check connection
        if (mysqli_connect_errno($con))
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        if ($_GET["job"] == "update"){

          $customerID = $_POST["Customer_ID"];
          $username = $_POST["Username"];
          $DOB = $_POST["DOB"];
          $email = $_POST["Email"];
          $cardNumber = $_POST["CardNumber"];
          $billingAddress = $_POST["BillingAddress"];
          $phoneNo = $_POST["PhoneNumber"];

          $result7 = mysqli_query($con,"update customer set Username='".$username. "', DOB='". $DOB. "', Email='". $email. "', CardNumber='". $cardNumber."', BillingAddress='". $billingAddress. "', PhoneNumber='". $phoneNo. "' where Customer_ID=". $customerID);

        }

        if ($_GET["job"] == "delete"){
          $customerID = $_GET["Customer_ID"];
          $result8 = mysqli_query($con,"Delete from customer where Customer_ID=". $customerID );

        }

        if ($_GET["job"] == "update1"){

          $member_id = $_POST["member_id"];
          $fave_music_genre = $_POST["fave_music_genre"];
          $fave_movie_genre = $_POST["fave_movie_genre"];
          $fave_book_genre = $_POST["fave_book_genre"];

          $result9 = mysqli_query($con,"update sp_member set fave_music_genre='".$fave_music_genre. "', fave_movie_genre='". $fave_movie_genre. "', fave_book_genre='". $fave_book_genre. "' where member_id=". $member_id);

        } 

        if ($_GET["job"] == "delete1"){
          $member_id = $_GET["member_id"];
          $result10 = mysqli_query($con,"Delete from sp_member where member_id=". $member_id );

        }

        if ($_GET["job"] == "delete2"){
          $member_id = $_GET["member_id"];
          $result11 = mysqli_query($con,"Delete from premium where member_id=". $member_id );

        }

        if ($_GET["job"] == "update2"){

          $member_id = $_POST["member_id"];
          $no_of_releases = $_POST["no_of_releases"];
          $no_of_streams = $_POST["no_of_streams"];

          $result12 = mysqli_query($con,"update verified set no_of_releases='".$no_of_releases. "', no_of_streams='". $no_of_streams. "' where member_id=". $member_id);

        }

        if ($_GET["job"] == "delete3"){
          $member_id = $_GET["member_id"];
          $result13 = mysqli_query($con,"Delete from verified where member_id=". $member_id );

        }

        if ($_GET["job"] == "delete4"){
          $member_id = $_GET["member_id"];
          $result14 = mysqli_query($con,"Delete from regular where member_id=". $member_id );

        }
      

        $result2 = mysqli_query($con,"SELECT * FROM customer");
        $result3 = mysqli_query($con,"SELECT * FROM sp_member");
        $result4 = mysqli_query($con,"SELECT * FROM premium");
        $result5 = mysqli_query($con,"SELECT * FROM verified");
        $result6 = mysqli_query($con,"SELECT * FROM regular");



        echo "All Customers" . "<br>";
        echo "<table border='1'>
        <tr>
        <th>Customer ID</th>
        <th>Username</th>
        <th>DOB</th>
        <th>Email</th>
        <th>CardNumber</th>
        <th>BillingAddress</th>
        <th>PhoneNumber</th>
        </tr>";

        while($row = mysqli_fetch_array($result2))
        {
          echo "<tr>";
          echo "<td>" . $row['Customer_ID'] . "</td>";
          echo "<td>" . $row['Username'] . "</td>";
          echo "<td>" . $row['DOB'] . "</td>";
          echo "<td>" . $row['Email'] . "</td>";
          echo "<td>" . $row['CardNumber'] . "</td>";
          echo "<td>" . $row['BillingAddress'] . "</td>";
          echo "<td>" . $row['PhoneNumber'] . "</td>";
          echo "<td><a href='update_customer.php?Customer_ID=" . $row['Customer_ID'] . "'>Update</a></td>";
          echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='admin.php?job=delete&amp;Customer_ID= " . $row['Customer_ID'] . "'>DELETE</a></td>";
  
           echo "</tr>";


        }
        
        echo "</table>";

        echo "<table border='1'>
        <tr>
        <th>Member ID</th>
        <th>Fave music genre</th>
        <th>Fave book genre</th>
        <th>Fave movie genre</th>
        <th>Customer ID</th>
        </tr>";

        echo "<br>" . "<br>" . "<br>";
        echo "Member Information";
        while($row1 = mysqli_fetch_array($result3))
        {
          echo "<tr>";
          echo "<tr>";
          echo "<td>" . $row1['member_id'] . "</td>";
          echo "<td>" . $row1['fave_music_genre'] . "</td>";
          echo "<td>" . $row1['fave_book_genre'] . "</td>";
          echo "<td>" . $row1['fave_movie_genre'] . "</td>";
          echo "<td>" . $row1['Customer_id'] . "</td>";
          echo "<td><a href='update_member.php?member_id= " . $row1['member_id'] . "'>Update</a></td>";
          echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='admin.php?job=delete1&amp;member_id= " . $row1['member_id'] . "'>DELETE</a></td>";
  
          echo "</tr>";


        }
        echo "</table>";

        
        echo "<table border='1'>
        <tr>
        <th>Member ID</th>
        <th>Number of devices</th>
        </tr>";

        echo "<br>" . "<br>" . "<br>";
        echo "Premium Members" . "<br>";
        while($row2 = mysqli_fetch_array($result4))
        {
          echo "<tr>";
          echo "<tr>";
          echo "<td>" . $row2['member_id'] . "</td>";
          echo "<td>" . $row2['no_of_devices'] . "</td>";
          echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='admin.php?job=delete2&amp;member_id= " . $row2['member_id'] . "'>DELETE</a></td>";
  
           echo "</tr>";


        }

        echo "</table>";

         echo "<table border='1'>
        <tr>
        <th>Member ID</th>
        <th>Number of releases</th>
        <th>Number of streams</th>
        </tr>";

        echo "<br>" . "<br>" . "<br>";
        echo "Verified Members";
        while($row3 = mysqli_fetch_array($result5))
        {
          echo "<tr>";
          echo "<tr>";
          echo "<td>" . $row3['member_id'] . "</td>";
          echo "<td>" . $row3['no_of_releases'] . "</td>";
          echo "<td>" . $row3['no_of_streams'] . "</td>";
          echo "<td><a href='update_verified.php?member_id= " . $row3['member_id'] . "'>Update</a></td>";
          echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='admin.php?job=delete3&amp;member_id= " . $row3['member_id'] . "'>DELETE</a></td>";
  
           echo "</tr>";


        }

        echo "</table>";

         echo "<table border='1'>
        <tr>
        <th>Member ID</th>
        </tr>";

        echo "<br>" . "<br>" . "<br>";
        echo "Regular Members";
        while($row4 = mysqli_fetch_array($result6))
        {
          echo "<tr>";
          echo "<tr>";
          echo "<td>" . $row4['member_id'] . "</td>";
          echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='admin.php?job=delete4&amp;member_id= " . $row4['member_id'] . "'>DELETE</a></td>";
  
           echo "</tr>";


        }
        echo "</table>";
        echo "<br>" . "<br>" . "<br>";

        mysqli_close($con);
        ?>

    <footer class="container-fluid text-center" style = "background-color: black;">
      <p style="color: black;">Copyright (c) Spotflix Media 2021</p>
    </footer>

     




</body>
</html>