<?php
include '../model/mydb.php';


$mydb = new Model();

// connecting db
$conn = $mydb->OpenConn();

// adding Personal user 
$result = $mydb->savingshistory($conn,"savings");

if ($result->num_rows > 0) {
    
    foreach ($result as $row){      
        $row["savings_name"] ;
        $row["savings_amount"] ;
        $row["savings_type"] ;
    }   
}

?>