<?php
include "../model/mydb.php";
$user_id = $_GET['P_userid'];
$email = $password = "";
$emailError = $passwordError = $hasError = "";



if (isset ($_REQUEST["Submit"])) {

    // email validation
    if (!empty ($_REQUEST["email"])) {
        if (!preg_match("/^([a-zA-z0-9\+_\-]+)(.\[a-zA-Z0-9\+_\-]+)*@(gmail+\.)+com$/ix", $_REQUEST["email"])) {
            $emailError = "Invalid Email";
            $hasError = 1;
        } else {
            $email = $_REQUEST["email"];
        }
    } else {
        $emailError = "Please enter email";
        $hasError = 1;
    }


    // password validation
    if (!empty ($_REQUEST['password'])) {
        $password = $_REQUEST["password"];
    } else {
        $passwordError = "please enter password";
        $hasError = 1;
    }


    $mydb = new Model();
    $conObj = $mydb->OpenConn();

    $result = $mydb->Login($conObj, "personal_user", $email, $password);

    if ($result->num_rows > 0) {
       echo "login successful";

    } else {
        echo "User does not exist. Please register first. Login unsuccessful.";
    }

}



?>