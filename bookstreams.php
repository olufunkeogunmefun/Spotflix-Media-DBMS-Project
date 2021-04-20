<?php
    include '../backend/database.php';
    include '../logic/listbookstreams.php';

    $conn= connect();

    $result = getBookstreams($conn);
    
    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['book_name'] = $row['book_name'];
        $output[$rowNumber]['ISBN'] = $row['ISBN'];
        $output[$rowNumber]['member_id'] = $row['member_id'];


        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>