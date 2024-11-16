<?php
    $servername = "localhost";      // Change this if your MySQL server is running on a different host
    $username = "root";             // Default username in XAMPP is "root"
    $password = "";                 // Default password is empty in XAMPP
    $database = "olala";    // Replace "your_database" with the actual name of your database
    
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Connection successful
    echo "Connected successfully";
    
    // Close the connection (optional)
    mysqli_close($conn);
?>