<?php
    include '../backend/database.php';
    include '../logic/listbooks.php';

    $conn= connect();

    $result = getBooks($conn);

    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['ISBN'] = $row['ISBN'];
        $output[$rowNumber]['Book_name'] = $row['Book_name'];
        $output[$rowNumber]['author_name'] = $row['author_name'];
        $output[$rowNumber]['genre'] = $row['genre'];
        $output[$rowNumber]['date_borrowed'] = $row['date_borrowed'];
        $output[$rowNumber]['date_returned'] = $row['date_returned'];
        $output[$rowNumber]['no_of_copies_rented'] = $row['no_of_copies_rented'];
        $output[$rowNumber]['no_of_copies_bought'] = $row['no_of_copies_bought'];
 

        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>