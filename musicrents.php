<?php
    include '../backend/database.php';
    include '../logic/listmusicrents.php';

    $conn= connect();

    $result = getRentedmusic($conn);
    
    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['music_name'] = $row['music_name'];
        $output[$rowNumber]['member_id'] = $row['member_id'];


        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>