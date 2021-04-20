<?php

    function getAdmin($conn){
        $sql = "SELECT * FROM administrator;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>