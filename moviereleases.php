<?php
    include '../backend/database.php';
    include '../logic/listmoviereleases.php';

    $conn= connect();

    $result = getMovie_releases($conn);

    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['movie_name'] = $row['movie_name'];
        $output[$rowNumber]['member_id'] = $row['member_id'];


        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>