<?php

    function getMusic($conn){
        $sql = "SELECT * FROM music;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>