<?php 

    // Creating model class 
    class Model {
        // creating Connection method
        function OpenConn(){
            $conn = new mysqli("localhost", "root", "", "FinancialManagementSystem");
            return $conn;

        }

        // creating method to insert into db
        function AddSmallBusinessOwnerRegistration($conn, $table, $businessName, $businessType, $email, $password, $confirmPassword, $taxNumber, $phoneNumber){
            $insertSql = "INSERT INTO $table (businessName, businessType, email, password, confirmPassword, taxNumber, phoneNumber) VALUES ('$businessName', '$businessType', '$email', '$password', '$confirmPassword', '$taxNumber', '$phoneNumber')";
            $result = $conn->query($insertSql);
            return $result;
        }
    }


?>