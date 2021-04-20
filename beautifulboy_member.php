<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beautiful Boy | Spotflix Media</title> 
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

        input[type=submit] {
            width: 15%;
            background-color: white;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: 2px solid #4CAF50;
            border-radius: 4px;
            cursor: pointer;
        } 

        input[type=submit]:hover {
            background-color: #4CAF50;
            color: white;
        }
        .button_holder {
            text-align: center;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }
        .center-button-left{
            margin-left: 425px;
            margin-right: auto;
            margin-top: 50px;
        }
        .center-button-right{
            margin-left: auto;
            margin-right: 425px;
            margin-top: 50px;
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
                        <li><a href="member_home.php"><img src = "Logo b.svg" style= "height:40px; width:40px;"></a></li>
                        <li><a href="myitems.php" style= "font-size:110%; color: white; padding:20px;">My items</a></li>
                        <li><a href="member_categories.php" style= "font-size:110%; color: white; padding:20px;">Categories</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <a href="profile.php"><img src="JaneSmith.svg" style="width:70%;margin-top:7px;"></a>
                        
                    </ul>

                </div>

                

            </div>

        </nav>

        <div>
            <h2 style="padding-left:10px;padding-top:10px;">Beautiful Boy | Directed by Felix Van Groeningen</h2>
            <img src="\MediaImages\beautifulboybanner.jpg" style="width:100%;padding:80px;">
        </div>


        <?php
        $movieName = "Beautiful Boy";
        ?>

        <div class="button_holder">
            <form action="myitems.php" method="post">
                <input type="submit" value="Play">    
            </form>
            

        
            <form action="pay.php" method="post">
                <input type="submit" value="Rent">
            </form>
        </div>

    </body>
</html>