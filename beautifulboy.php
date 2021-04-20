<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Categories | Spotflix Media</title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Train One'rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
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

        .button {
            border: none;
            color: white;
            padding: 32px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: -70px 0px;
            transition-duration: 0.4s;
            cursor: pointer;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .button1 {
            width: 15%;
            background-color: white;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: 2px solid #4CAF50;
            border-radius: 4px;
            cursor: pointer;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }
        .button_holder {
            text-align: center;
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
                        <li><a href="myitems.php" style= "font-size:110%; color: white; padding:20px;">My items</a></li>
                        <li><a href="categories.php" style= "font-size:110%; color: white; padding:20px;">Categories</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="log-in.php"> <button class="log-in-button">Log In</button></a>
                        
                    </ul>

                </div>

                

            </div>

        </nav>

        <div>
            <h2 style="padding-left:10px;padding-top:10px;">Beautiful Boy | Directed by Felix Van Groeningen </h2>
            <img src="\MediaImages\beautifulboybanner.jpg" style="width:100%;padding:80px;">
            
            <div class="button_holder">
            <form action="log-in.php" onsubmit="myFunction()">
                <input type="submit" class="button1" value="Play">
                <input type="submit" class="button1" value="Rent">
                </form>
            </div>
            <script>
                function myFunction() {
                    alert("You have to be logged in to stream or rent media.");
                }
            </script>
        </div>

    </body>
</html>