<?php

    function getMovies($conn){
        $sql = "SELECT * FROM movies;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>