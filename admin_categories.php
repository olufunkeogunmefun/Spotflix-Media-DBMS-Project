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
        .button{
            border: 2px;
            border-radius: 8px;
            color: white;
            background-color: SeaGreen;
            padding: 5px 15px;
            text-align: center;
            font-size: 14px;
            margin: 5px 980px;
            cursor: pointer;
        }

        .log-in-button:hover{
            background-color: #45a049;
        }
        .floated_img
        {
            float: left;
            padding-right: 20px;
            padding-top: 20px;
            width: 220px;
            height: 380px;
        }
        .floated_img2
        {
            float: left;
            padding-right: 20px;
            width: 220px;
            height: 380px;
        }
        .floated_label{
            position:absolute;
            left:5px;
            top:510px;
        }
        .floated_label2{
            position:absolute;
            left:5px;
            top:870px;
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
                        <li><a href="admin.php" style= "font-size:110%; color: white; padding:20px;">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="log-in.php"> <button class="log-in-button">Log Out</button></a>
                        
                    </ul>

                </div>

                

            </div>

        </nav>
    
        <h1 style="text-align:center;padding:10px;">Categories</h1>
        <p style="font-size:20px">Movies</p>
        <div>
            <ul>
                <button class="button">More</button>
            </ul> 
            <ul>
               <a href="admin_movies.php"><button class="button button1">Add</button></a>
            </ul> 
            <div class="floated_img2">
                <a href="moonlight.php"><img src="\MediaImages\moonlight.jpg" style="width:100%" alt="Moonlight"></a>
                <p>Moonlight</p>
            </div>
            <div class="floated_img2">
                <a href="concretecowboy.php"><img src="\MediaImages\concretecowboy.jpg" style="width:100%" alt="Concrete Cowboy"></a>
                <p>Concrete Cowboy</p>
            </div>
            <div class="floated_img2">
                <a href="beautifulboy.php"><img src="\MediaImages\beautifulboy.jpg" style="width:100%" alt="Beautiful Boy"></a>
                <p>Beautiful Boy</p>
            </div>
            <div class="floated_img2">
                <a href="loveandmonsters.php"><img src="\MediaImages\loveandmonsters.jpg" style="width:100%" alt="Love and Monsters"></a>
                <p>Love and Monsters</p>
            </div>
            <div class="floated_img2">
                <a href="thebookthief.php"><img src="\MediaImages\thebookthief.jpg" style="width:100%" alt="The Book Thief"></a>
                <p>The Book Thief</p>
            </div>
                        
        </div><br><br><br><br><br>

        <h3 class="floated_label" style="font-size:20px">Music</h3>
        <div>
            <ul>
                <button class="button">More</button>
            </ul> 
            <ul>
               <a href="admin_music.php"><button class="button button1">Add</button></a>
            </ul> 
            <div class="floated_img2">
                <a href="silksonic.php"><img src="\MediaImages\silksonic.jpg" style="width:100%" alt="Leave The Door Open"></a>
                <p> Leave The Door Open</p>
             </div>
             <div class="floated_img2">
                <a href="justice.php"><img src="\MediaImages\justice.jpg" style="width:100%" alt="Justice"></a>
                <p> Justice </p>
            </div>
            <div class="floated_img2">
                <a href="elultimo.php"><img src="\MediaImages\elultimo.jpg" style="width:100%" alt="El Ultimo Tour Del Mundo"></a>
                <p> El Ultimo Tour Del Mundo </p>
            </div>
            <div class="floated_img2">
                <a href="futurenostalgia.php"><img src="\MediaImages\futurenostalgia.jpg" style="width:100%"></a>
                <p> Future Nostalgia </p>
             </div>
             <div class="floated_img2">
                 <a href="loc.php"><img src="\MediaImages\loc.jpg" style="width:100%"></a>
                 <p> Level Of Concern </p>
            </div>
        </div><br><br><br><br>

        <h3 class="floated_label2" style="font-size:20px">Books</h3>
        <div>
            <ul>
                <button class="button">More</button>
            </ul> 
             <ul>
               <a href="admin_books.php"><button class="button button1">Add</button></a>
            </ul> 
            <div class="floated_img2">
                <a href="katherines.php"><img src="\MediaImages\katherines.jpg" style="width:100%" alt="An Abundance of Katherines"></a>
                <p> An Abundance of Katherines</p>
             </div>
             <div class="floated_img2">
                <a href="legend.php"><img src="\MediaImages\legend.jpg" style="width:100%" alt="Legend"></a>
                <p> Legend </p>
            </div>
            <div class="floated_img2">
                <a href="skulduggery.php"><img src="\MediaImages\skulduggery.jpg" style="width:100%" alt="Skulduggery Pleasant"></a>
                <p> Skulduggery Pleasant </p>
            </div>
            <div class="floated_img2">
                <a href="thepower.php"><img src="\MediaImages\thepower.jpg" style="width:100%" alt="The Power"></a>
                <p> The Power </p>
             </div>
             <div class="floated_img2">
                 <a href="lemony.php"><img src="\MediaImages\lemony.jpg" style="width:100%"></a>
                 <p> WHo Could That Be At This Hour? </p>
            </div>
        </div>

        
    </body>
</html>