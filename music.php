<?php
    include '../backend/database.php';
    include '../logic/listmusic.php';

    $conn= connect();

    $result = getMusic($conn);

    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['Artist_name'] = $row['Artist_name'];
        $output[$rowNumber]['Genre'] = $row['Genre'];
        $output[$rowNumber]['No_of_downloads'] = $row['No_of_downloads'];
        $output[$rowNumber]['music_name'] = $row['music_name'];


        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>