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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $name ?></title>
        <?php require_once 'components/boot.php' ?>
        <style type="text/css">
            .manageProduct {          
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            #map {
                height: 400px;
                margin-bottom: 50px;
            }
            .h2{
                text-align: center;
                margin: 30px 0;
            }
            .content{
                margin: 50px 0;
                display: flex;
                justify-content: space-around;
            }
            @media screen and (max-width: 850px) {
                .content{
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
            }
        </style>
    </head>
    <body>
    <?php require_once 'header.php' ?>
    <?php require_once 'navbar.php' ?>
        <div class="manageProduct w-75 mt-3">   
            <p class='h2'><?php echo $name ?></p>
            <div class="content">
                <img src="<?php echo $picture ?>" alt="<?php echo $name ?>" height="200px">
                <div id="details">
                    <ul>
                        <li><b>Name:</b> <?php echo $name ?></li>
                        <li><b>Price per Night:</b> <?php echo $price ?>€</li>
                        <li><b>Description:</b> <?php echo $desc ?></li>
                        <li><b>Address:</b> <?php echo $address ?></li>
                        <li><b>Phone:</b> <?php echo $tel ?></li>
                    </ul>
                </div>
            </div>
            <div id="map"></div>
        </div>
        <?php require_once 'footer.php' ?>
        <script>
            var map;
            function initMap() {
                var location = {
                    lat: <?php echo $lat ?>,
                    lng: <?php echo $long ?>
                };
                map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 14
                });
                var pinpoint = new google.maps.Marker({
                position: location,
                map: map
                });
            };
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    </body>
</html>

