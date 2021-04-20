<?php

    function getCustomers($conn){
        $sql = "SELECT * FROM customer;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>