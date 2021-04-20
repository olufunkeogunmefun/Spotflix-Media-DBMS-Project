<?php

    function getBooks($conn){
        $sql = "SELECT * FROM book_type;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>