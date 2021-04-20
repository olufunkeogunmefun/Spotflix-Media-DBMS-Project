<?php

    function getRentedbooks($conn){
        $sql = "SELECT * FROM book_rentedby;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>