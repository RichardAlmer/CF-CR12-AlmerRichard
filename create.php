<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Add Travel</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }      
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Travel</legend>
            <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Location Name</th>
                        <td><input class='form-control' type="text" name="name" placeholder="Location Name"/></td>
                    </tr>   
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name="price" placeholder="Price" step="any"/></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="text" name="picture" placeholder="Picture"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="desc" placeholder="Description"/></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input class='form-control' type="text" name="address" placeholder="Address"/></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><input class='form-control' type="text" name="tel" placeholder="Phone Number"/></td>
                    </tr>
                    <tr>
                        <th>Location on Map</th>
                        <td><input class='form-control' type="text" name="lat" placeholder="Latitude"/><input class='form-control' type="text" name="long" placeholder="Longitude"/></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Travel</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>