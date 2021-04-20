<?php

    function getMusic_releases($conn){
        $sql = "SELECT * FROM music_releases;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>