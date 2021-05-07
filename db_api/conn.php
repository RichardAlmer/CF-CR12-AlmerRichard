<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cr12_mount_everest_almerrichard";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>