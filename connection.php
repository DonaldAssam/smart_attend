<?php
    $servername = "localhost";
    $username = "root";
    $password = "donaldassam_6";


try {
    $conn = new PDO('mysql:host = localhost; dbname=biometric', $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>