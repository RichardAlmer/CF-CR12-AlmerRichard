<?php
    require_once 'RESTful.php';
    $url = 'http://localhost/CR12-AlmerRichard/db_api/webservice.php';
    $result = curl_get($url);
    $travelObj = json_decode($result, true); //it turns the json into an object
    // var_dump($travelObj);
    $travel = $travelObj['data'];
    // var_dump($travel);
    $tbody ="";
    foreach ($travel as $data) {
        $tbody .="
        <tr>
            <td><img class='img-thumbnail' src=".$data['picture']." width='200px'</td>
            <td>".$data['locationName']."</td>
            <td>".$data['price']."</td>
            <td>".$data['description']."</td>
            <td>".$data['address']."</td>
            <td>".$data['tel']."</td>
            <td>".$data['latitude']." ".$data['longitude']."</td>
        </tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DB-API</title>
        <style>
            .manageProduct {          
               margin: auto;
           }
           .img-thumbnail {
               width: 70px !important;
                height: 70px !important;
           }
           td {          
               text-align: left;
               vertical-align: middle;

            }
           tr {
               text-align: center;
           }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">
            <p class='h2'>Travels</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html>