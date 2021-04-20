<?php echo file_get_contents("homepage.html"); ?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Spotflix Media</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    
    .banner {
      
      background-repeat: no-repeat;
      background-size: contain;
      
    }
    /* Rounded border */
    hr.rounded {
      border-top: 8px solid #bbb;
      border-radius: 5px;
      border-color: grey;
    }

    .button {
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    
    .log-in-button {
      border: 2px;
      border-radius: 8px;
      color: white;
      background-color: SeaGreen;
      padding: 5px 15px;
      text-align: center;
      font-size: 14px;
      margin: 15px 10px;
      cursor: pointer;
    }

    .log-in-button:hover{
      background-color: #45a049;
    }

    .button1 {
      background-color: white; 
      color: black; 
      border: 2px solid #4CAF50;
    }

    .button1:hover {
      background-color: #4CAF50;
      color: white;
    }
    

    .center {
      margin: auto;
      width: 50%;
      border: 3px solid green;
      padding: 10px;
    }

    .w3-bar {
      width:100%;overflow:hidden
    }
    .w3-center .w3-bar{
      display:inline-block;width:auto
    }
    .w3-bar .w3-bar-item{
      padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0
    }
    .w3-dropdown-content{
      display:block
    }
    .w3-border{
      border:1px solid #ccc!important
    }
    .w3-bar-block .w3-dropdown-hover,.w3-bar-block .w3-dropdown-click{width:100%}
.w3-bar-block .w3-dropdown-hover .w3-dropdown-content,.w3-bar-block .w3-dropdown-click .w3-dropdown-content{min-width:100%}
.w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}

    .w3-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
  </style>

  <body style = "background-color: black;">
   
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
            <div class= "w3-dropdown-hover"><a href="profile.php"><img src="Admin.svg" style="width:70%;margin-top:7px;"></a></div>
              <p style="color:white">Admin</p>
              <div class="w3-dropdown-content">
                <a href="admin.php"><button>Admin Page</button></a>
                <a href="log-out.php"><button>Log Out</button></a>
              </div>
              


            


          </ul>

        </div>

        

      </div>

    </nav>
    <div class="banner">
      <img src = "home_background.jpg" style= "height:500px; width:1263px">
    </div>
    <h1 style="font-size:70px;font-family:Train One;color:white;text-align:center;">Welcome to Spotflix Media</h1><br>
    <p style="font-size:15px;font-family:Roboto;color:white;text-align:center;">The home of quality entertainment, however you like.</p><br><br><br><br>
    <p style="font-family:Roboto;color:white;font-size:30px;">Watch, listen, or read.</p>
    <p style="font-family:Roboto;color:white;font-size:12px;">Enjoy a wide variety of movies, shows, music and books on one simple platform</p><br><br>
    <hr class="rounded">
    <p style="font-family:Roboto;color:white;font-size:30px;">Stream, Rent or Buy.</p>
    <p style="font-family:Roboto;color:white;font-size:12px;">You choose how your entertainment is delivered. The choice is always yours.</p><br><br>
    <hr class="rounded">
    <p style="font-family:Roboto;color:white;font-size:30px;">Get access to all your content in one place</p>
    <p style="font-family:Roboto;color:white;font-size:12px;">Your library stores all of your content-books, music <i>and</i> movies/shows. Accessible with one simple click.</p><br><br>
    <hr class="rounded">
    

    <a href="sign-up.php"><button class="button button1">Sign Up today!</button></a>
    

    <footer class="container-fluid text-center" style = "background-color: black;">
      <p style="color: white;">Copyright (c) Spotflix Media 2021</p>
    </footer>

  </body>

  
    

</html>
