<?php
    require_once("conn.php");

    $sql = "SELECT * FROM travel";

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    mysqli_close($conn);
?>