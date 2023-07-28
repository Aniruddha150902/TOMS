<?php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "TODB"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    // $servername = "sql211.infinityfree.com";
    // $username = "if0_34707582"; 
    // $password = "csj6tNhxhv12rqU"; 
    // $dbname = "if0_34707582_todb"; 
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // if ($conn->connect_error) 
    // {
    //     die("Connection failed: " . $conn->connect_error);
    // }
?> 