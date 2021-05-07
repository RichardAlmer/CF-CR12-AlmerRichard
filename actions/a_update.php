<?php
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];  
    $name = $_POST['name'];
    $picture = $_POST['picture'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $long = $_POST['long'];
    $lat = $_POST['lat'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
            
    $sql = "UPDATE travel SET locationName = '$name', price = $price, picture = '$picture', description = '$desc', longitude = $long, latitude = $lat, address = '$address', tel = $tel WHERE id = {$id}";
        
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
    }
    $connect->close();    
} else {
    header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php' ?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
                <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>