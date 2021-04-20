<?php

    function getRentedmovies($conn){
        $sql = "SELECT * FROM movie_rentedby;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>