<?php
    include "navbar.php"; 
    include "footer.php";
    // Replace these with your actual database credentials
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'samm';

    // Create a connection to MySQL
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "connect";
    }

?>