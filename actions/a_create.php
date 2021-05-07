<?php
require_once 'db_connect.php';

if ($_POST) {  
    $name = $_POST['name'];
    $price = $_POST['price'];
    $picture = $_POST['picture'];
    $desc = $_POST['desc'];
    $long = $_POST['long'];
    $lat = $_POST['lat'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    
    $sql = "INSERT INTO travel (locationName, picture, price, description, longitude, latitude, address, tel) VALUES ('$name', '$picture', $price, '$desc', $long, $lat, '$address', $tel)";

    if ($connect->query($sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
                <table class='table w-50'><tr>
                <td> $name </td>
                <td> $price </td>
                </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
    }
    $connect->close();
} else {
    header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php' ?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>