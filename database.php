<?php

    $host = 'localhost';
    $user = 'root';
    $pwd = 'spotflixmedia';
    $db = 'spotflixmedia';

    $conn;

    function connect (){
        global $host;
        global $user;
        global $pwd;
        global $db;

        global $conn;

        $conn = mysqli_connect($host, $user, $pwd, $db);

        if(mysqli_connect_errno($conn)){
            print "Connection to $db failed.";
        }
        else{
            print "Successfully connected to $db";
        }

        return $conn;
    }
?>