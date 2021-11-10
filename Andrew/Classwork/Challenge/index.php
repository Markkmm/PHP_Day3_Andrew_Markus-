<?php

require_once 'includes/db_connect.php';

$sql = "SELECT * FROM dishes;";
$result = mysqli_query($dbConn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo "<br>";
// echo gettype($result);
// var_dump($result);
// echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-D3-Challenge Restaurant</title>
    <!-- BS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- NAV PILLS -->
    <nav class="bg-info">
        <div class="brand d-flex">
            <img src="img/play-icon-color-green-scaled.png" height="42" class="me-2">
            <p class="m-auto text-light">FRESH</p>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item m-auto">
                <a class="nav-link active" href="#">Menu</a>
            </li>
            <li class="nav-item m-auto">
                <a class="nav-link" href="includes/create.php">Create</a>
            </li>
            <li class="nav-item m-auto">
                <a class="nav-link" href="includes/about.html">About</a>
            </li>
        </ul>
    </nav>
    <!-- MENU -->
    <div class="container border bg-light m-auto">
        <h2 class="text-center p-2 text-success">Interactive Menu</h2>
        <div class="row g-3 border shadow p-1">
            <?php
            foreach ($rows as $row) {
                echo "<div class='col-lg-3 col-md-6 col-sm-12 border bg-light'>";
                echo "<img src='$row[image]' class='img-thumbnail rounded'>";
                echo "<h4 class='text-center text-primary'>$row[dishName]</h4>";
                echo '<hr>';
                echo "<p class='p-1 text-justify'>$row[description]</p>";
                echo '<hr>';
                echo "<h4 class='text-center text-primary'>$row[price]€</h4>";
                echo '<hr>';
                echo "<div class='text-center p-2'><a href='includes/delete.php?dishID={$row['dishID']}' class='btn btn-outline-danger'>Delete</a></div>";
                echo "</div>";
            }
            ?>
        </div>
        <hr>
        <div class="text-center">
            <a href="includes/create.php" class="btn btn-outline-success">Add a dish to the menu</a>
        </div>
        <hr>
    </div>

    <!-- BS JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>