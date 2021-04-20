<?php
    include '../backend/database.php';
    include '../logic/listboughtbooks.php';

    $conn= connect();

    $result = getBoughtbooks($conn);
    
    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['customer_id'] = $row['customer_id'];
        $output[$rowNumber]['ISBN'] = $row['ISBN'];
        $output[$rowNumber]['book_name'] = $row['book_name'];


        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>