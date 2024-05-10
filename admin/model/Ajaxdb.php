<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "financialmanagementsystem"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieving user ID from the AJAX request
    $userName = $_GET['name'];

    // Query to fetch user data from the database
    $sql = "SELECT * FROM test WHERE name = '$userName'";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $userData = array(
                "id" => $row["id"],
                "name" => $row["name"],
                "location" => $row["location"],
                "position" => $row["position"],
            );
            // Encoding the user data as JSON and sending it back
            echo json_encode($userData);
        }
    } else {
        echo "No user found.";
    }
}

$conn->close();
