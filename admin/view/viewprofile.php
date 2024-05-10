<?php 
include "../controller/viewprofile_controller.php";
echo $_GET['P_userid'];
?>

<html>


<fieldset>
    <legend>
        <p>View Profile</p>
    </legend>

    <body>
        <?php
        echo "<table>";
         
                echo"<tr>User ID:</tr><br>
                <tr>First Name:</tr><br>
                <tr>Last Name:</tr><br>
                <tr>Email:</tr><br>
                <tr>Phone:</tr><br>
                <tr>username:</tr><br>
                <tr>Gender:</tr><br>
                <tr>Monthly Income:</tr><br> ";  
                foreach ($result as $row){ 
                    echo "<tr>".$row["P_UserId"]."</tr><br>"; 
                    echo "<tr>".$row["First_name"] ."</tr><br>";
                    echo "<tr>".$row["Email"] ."</tr><br>";
                    echo "<tr>".$row["Phone"] ."</tr><br>";
                    echo "<tr>".$row["Username"]."</tr><br>";
                    echo "<tr>".$row["Gender"] ."</tr><br>";
                    echo "<tr>".$row["Monthly_income"] ."</tr><br>";   
                }

       echo" </table>";

       ?>

    </body>
</fieldset>

</html>