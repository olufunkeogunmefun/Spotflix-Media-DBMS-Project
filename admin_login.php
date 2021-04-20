<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Log In | Spotflix Media</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Train One'rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      padding: 0px 0px;
      background-color: DarkSlateGrey;
    }



    input[type=submit] {
            width: 15%;
            background-color: SeaGreen;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        } 

        input[type=submit]:hover {
            background-color: #45a049;
            color: white;
        }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>

  <body>
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
            <li><a href="home.php"><img src = "Logo b.svg" style= "height:40px; width:40px;"></a></li>
            <li><a href="log-in.php" style= "font-size:110%; color: white; padding:20px;">My items</a></li>
            <li><a href="categories.php" style= "font-size:110%; color: white; padding:20px;">Categories</a></li>
          </ul>
          

        </div>

        

      </div>
    </nav>

    
    <h1 style="text-align:center">Log In</h1>
    <div>
      <form action="admin_home.php" method="post">
          <label for="Member_username">Username: </label><br>  
          <input type="text" name="AdminName" placeholder="Your name..."/> <br>  
          <br>
          <label for="password">Password: </label><br>  
          <input type="password" id="pwd" name="AdminPassword" placeholder="Your password..."/> <br/>  
          <input type="submit" value="Log In" formaction="admin_home.php"><br>  
          <input type="submit" value="Cancel" formaction="home.php"><br>  

      </form>
    </div>

    <footer class="container-fluid text-center" style = "background-color: black;">
      <p style="color: white;">Copyright (c) Spotflix Media 2021</p>
    </footer>
  </body>

</html>

