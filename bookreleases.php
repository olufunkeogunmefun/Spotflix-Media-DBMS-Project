<?php
    include '../backend/database.php';
    include '../logic/listbookreleases.php';

    $conn= connect();

    $result = getBook_releases($conn);

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