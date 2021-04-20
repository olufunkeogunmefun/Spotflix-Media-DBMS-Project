<?php
    include '../backend/database.php';
    include '../logic/listmembers.php';

    $conn= connect();

    $result = getMembers($conn);

    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['member_id'] = $row['member_id'];
        $output[$rowNumber]['fave_movie_genre'] = $row['fave_movie_genre'];
        $output[$rowNumber]['fave_book_genre'] = $row['fave_book_genre'];
        $output[$rowNumber]['fave_music_genre'] = $row['fave_music_genre'];
        $output[$rowNumber]['Customer_id'] = $row['Customer_id'];

        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>