<?php

    function getBook_releases($conn){
        $sql = "SELECT * FROM book_releases;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>