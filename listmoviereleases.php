<?php

    function getMovie_releases($conn){
        $sql = "SELECT * FROM movie_releases;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>