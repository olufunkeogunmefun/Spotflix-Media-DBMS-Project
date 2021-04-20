<?php

    function getMusic_streams($conn){
        $sql = "SELECT * FROM music_streamedby;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>