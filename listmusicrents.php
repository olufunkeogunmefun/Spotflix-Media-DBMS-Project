<?php

    function getRentedmusic($conn){
        $sql = "SELECT * FROM music_rentedby;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>