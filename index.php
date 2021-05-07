<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM travel";
$result = mysqli_query($connect ,$sql);
$card='';
if(mysqli_num_rows($result)  > 0) {    
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
        $card .= "
        <div class='card' style='width: 18rem;'>
            <img src=".$row['picture']." class='card-img-top' alt=".$row['locationName'].">
            <div class='card-body'>
                <h5 class='card-title'>".$row['locationName']."</h5>
                <p class='card-text'>".$row['price']."€ per Night</p>
                <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
                <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
                <a href='details.php?id=" .$row['id']."'><button class='btn btn-warning btn-sm' type='button'>Details</button></a>
            </div>
        </div>";
    };
} else {
    $card = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mount Everest Travels</title>
        <?php require_once 'components/boot.php' ?>
        <style type="text/css">
            .manageProduct {          
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            .card{
                margin: 30px;
            }
            .card-body {
                text-align: center;
            }
            .h2{
                text-align: center;
                margin: 30px 0;
            }
            .content{
                margin: 50px 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
        </style>
    </head>
    <body>
    <?php require_once 'header.php' ?>
    <?php require_once 'navbar.php' ?>
        <div class="manageProduct w-75 mt-3">   
            <p class='h2'>Travels</p>
            <div class="content"><?= $card;?></div>
        </div>
        <?php require_once 'footer.php' ?>
    </body>
</html>

