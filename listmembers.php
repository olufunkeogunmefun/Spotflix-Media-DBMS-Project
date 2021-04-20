<?php

    function getMembers($conn){
        $sql = "SELECT * FROM sp_member;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>