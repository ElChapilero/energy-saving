<?php
    
    //Data Base connection
    //DeverLapers: Mario Fernando Portilla Barco
    //             David Sebastian Arevalo Cañizares

    $host = "localhost";
    $username = "postgres";
    $password = "5789";
    $dbname = "energy-saving";
    $port = "5432";

    $data_connections = "
    host =$host
    port =$port
    dbname =$dbname
    user =$username
    password =$password
    ";
    
    // Create connection
    $conn = pg_connect($data_connections);
    
    if (!$conn) {
        die("connection failed: ". pg_last_error());
    } else {
    }
?>