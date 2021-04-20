<?php
    include '../backend/database.php';
    include '../logic/listmovies.php';

    $conn= connect();

    $result = getMovies($conn);

    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['Director_name'] = $row['Director_name'];
        $output[$rowNumber]['Genre'] = $row['Genre'];
        $output[$rowNumber]['Rating'] = $row['Rating'];
        $output[$rowNumber]['No_of_copies_rented'] = $row['No_of_copies_rented'];
        $output[$rowNumber]['Date_borrowed'] = $row['Date_borrowed'];
        $output[$rowNumber]['Date_returned'] = $row['Date_returned'];
        $output[$rowNumber]['movie_name'] = $row['movie_name'];
        

        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>