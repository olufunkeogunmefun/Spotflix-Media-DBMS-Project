<?php
    include '../backend/database.php';
    include '../logic/insertcustomer.php';

    $conn= connect();

    $result = insertCustomer($conn);
    
    header("Connect-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['Customer_ID'] = $row['Customer_ID'];
        $output[$rowNumber]['Username'] = $row['Username'];
        $output[$rowNumber]['Email'] = $row['Email'];
        $output[$rowNumber]['DOB'] = $row['DOB'];
        $output[$rowNumber]['CardNumber'] = $row['CardNumber'];
        $output[$rowNumber]['BillingAddress'] = $row['BillingAddress'];
        $output[$rowNumber]['PhoneNumber'] = $row['PhoneNumber'];
        $output[$rowNumber]['Admin_id'] = $row['Admin_id'];
        $output[$rowNumber]['UserPassword'] = $row['UserPassword'];

        $rowNumber++;
    }
    echo json_encode($output, JSON_PRETTY_PRINT);
?>