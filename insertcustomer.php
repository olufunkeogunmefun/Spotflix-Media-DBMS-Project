<?php




    function insertCustomer($conn){
        $data = json_decode(file_get_contents("php://input"));
        $Username = $data->Username;
        $Email = $data->Email;
        $DOB = $data->date('Y-m-d');
        $CardNumber = $data->CardNumber;
        $BillingAddress = $data->BillingAddress;
        $PhoneNumber = $data->PhoneNumber;
        $Admin_id = $data->Admin_id;
	    $UserPassword = $data->UserPassword;
        $sql = "INSERT INTO customer (Username, Email, DOB, CardNumber, BillingAddress, PhoneNumber, UserPassword) VALUES ('". $Username."','". $Email ."', '". $DOB ."', '". $CardNumber."','". $BillingAddress ."', '". $PhoneNumber ."', '". $UserPassword ."')";
        $result = mysqli_query($conn, $sql);
        $sql2 = "SELECT * FROM customer;";
        $result2 = mysqli_query($conn, $sql2);


        return $result;
    }
    


?>