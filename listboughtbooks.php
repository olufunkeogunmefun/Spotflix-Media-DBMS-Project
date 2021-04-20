<?php

    function getBoughtbooks($conn){
        $sql = "SELECT * FROM bought_by;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>