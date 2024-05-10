<?php

class Model
{
    // creating Connection method
    function OpenConn()
    {
        $conn = new mysqli("localhost", "root", "", "FinancialManagementSystem");
        return $conn;

    }

    // creating method to insert into db
    function AddPesonalUser($conn, $table, $fname, $lname, $email, $phone, $username, $password, $confirmPassword, $gender, $monthly_Income)
    {
        $insertSql = "INSERT INTO $table (First_Name, Last_Name, Email, Phone, Username, Password, Confirm_Password,Gender,Monthly_Income) VALUES ('$fname', '$lname', '$email', '$phone', '$username', '$password', '$confirmPassword', '$gender', '$monthly_Income')";
        $result = $conn->query($insertSql);
        return $result;
    }

    //log in
    function Login($conn, $table, $email, $password){
        $sql = "SELECT email, password FROM $table WHERE email='$email' AND password = '$password'";
        $result = $conn->query($sql);
        return $result;
    }

//view profile
    function viewprofile($conn, $table, $user_id){
        $sql= "SELECT * FROM $table WHERE P_userid = '$user_id'";
        $result = $conn->query($sql);
        return $result;
    }
    //addSavings
    function addSavings($conn, $table, $savings_name, $savings_amount, $savings_type){
        $sql = "INSERT INTO $table(savings_name, savings_amount, savings_type)
        VALUES('$savings_name', '$savings_amount', '$savings_type')";
        $result = $conn->query($sql);
        return $result;
    }
    //saving history
    function savingshistory($conn,$table){
        $sql= "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }

    function deleteSavings($conn, $table, $Saving_id){
        $sql = "DELETE FROM $table WHERE Savings_id='$Saving_id'";
        $result = $conn->query($sql);
        return $result;
    }
    function updateSavings($conn, $table, $id, $savings_name, $savings_amount, $savings_type){
        $sql = "UPDATE $table SET Savings_id='$id', savings_name='$savings_name', savings_amount='$savings_amount', savings_type='$savings_type'
        WHERE id='$id'";
        $result = $conn->query($sql);
        return $result;
    }
    function savingsExist($conn, $table, $id){
        $sql = "SELECT * FROM $table WHERE Savings_id='$id'";
        $result = $conn->query($sql);
        return $result;
    }

    function UserExist($conn, $table, $id){
        $sql = "SELECT * FROM $table WHERE P_userid='$id'";
        $result = $conn->query($sql);
        return $result;
    }


   
    // Assuming your database credentials
    
    
    
   
    
    
    
    
    

    
    
















}


?>
