<?php
    include '../backend/database.php';
    include '../logic/listadmin.php';

    $conn= connect();

    $result = getAdmin($conn);

    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['Admin_id'] = $row['Admin_id'];
        $output[$rowNumber]['AdminName'] = $row['AdminName'];
        $output[$rowNumber]['AdminPassword'] = $row['AdminPassword'];
        $output[$rowNumber]['Start_Date'] = $row['Start_Date'];

 

        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>