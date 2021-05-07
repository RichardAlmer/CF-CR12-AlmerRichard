<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM travel WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $name = $data['locationName'];
        $price = $data['price'];
        $picture = $data['picture'];
        $desc = $data['description'];
        $long = $data['longitude'];
        $lat = $data['latitude'];
        $address = $data['address'];
        $tel = $data['tel'];
    } else {
        header( "location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Travel</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60%;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }    
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'> Update request <img class='img-thumbnail rounded-circle' src='<?php echo $picture ?>' alt="<?php echo $name ?>"></legend>
            <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
                    <table class="table">
                    <tr>
                        <th>Location Name</th>
                        <td><input class="form-control" type="text" name="name" placeholder="Location Name" value="<?php echo $name ?>"/></ td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type="number" name="price" placeholder="Price" value="<?php echo $price ?>"/></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="text" name="picture" value="<?php echo $picture ?>"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text" name="desc" placeholder="Description" value="<?php echo $desc ?>"/></ td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input class='form-control' type="text" name="address" placeholder="Address" value="<?php echo $address ?>"/></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><input class='form-control' type="text" name="tel" placeholder="Phone Number" value="<?php echo $tel ?>"/></td>
                    </tr>
                    <tr>
                        <th>Location on Map</th>
                        <td><input class="form-control" type="number" name="lat" placeholder="Latitude" value="<?php echo $lat ?>"/><input class="form-control" type="number" name="long" placeholder="Longitude" value="<?php echo $long ?>"/></ td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>
                        <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                        <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>