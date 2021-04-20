l<?php

function getMovie_streams($conn){
    $sql = "SELECT * FROM movie_streamedby;";
    $result = mysqli_query($conn, $sql);

    return $result;
}


?>