

<?php 

include '../model/mydb.php';

$savings_id = $_GET['Savingsid'];

 //delete code 

 $mydb = new Model();

 $conObj = $mydb->OpenConn();
 
 $delete_result = $mydb->deleteSavings($conObj, "savings", $savings_id);
 echo $savings_id;

 if ($delete_result === TRUE){
     echo "Savings deleted successfully";
     header('Location: ../view/savinghistory.php');
 }else{
     echo "Deletion unsuccessful";
 }


?>
