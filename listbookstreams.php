<?php

    function getBookstreams($conn){
        $sql = "SELECT * FROM book_streamedby;";
        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>