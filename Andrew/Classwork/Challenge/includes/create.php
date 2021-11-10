<?php

require_once 'db_connect.php';
$message = '';

// Process form data
if (isset($_POST["submit"])) {
    $image = $_POST["image"];
    $name = $_POST["dishName"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $sql = "INSERT INTO dishes (image, dishName, price, description) 
    VALUES ('$image', '$name', '$price', '$description');";


    if (mysqli_query($dbConn, $sql) == true) {
        $message = "<span class='text-light bg-success p-2 mb-2'>New dish successfully added</span><br>
        <a href='../index.php' class='mt-2 btn btn-outline-primary m-auto'>Return to Menu</a>";
    };
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- BS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- NAV PILLS -->
    <nav class="bg-info">
        <div class="brand d-flex">
            <img src="../img/play-icon-color-green-scaled.png" height="42" class="me-2">
            <p class="m-auto text-light">FRESH</p>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item m-auto">
                <a class="nav-link" href="../index.php">Menu</a>
            </li>
            <li class="nav-item m-auto">
                <a class="nav-link active" href="create.php">Create</a>
            </li>
            <li class="nav-item m-auto">
                <a class="nav-link" href="about.html">About</a>
            </li>
        </ul>
    </nav>

    <div class="container p-5 border">
        <h2 class="text-center">Enter Dish Details</h2>
        <!-- FORM -->
        <form method="POST" class="m-auto d-flex flex-column p-4">
            <input type="text" name="image" placeholder="img/<imagename>.jpg" class="text-center"><br>
            <input type="text" name="dishName" placeholder="name of dish" class="text-center"><br>
            <input type="text" name="price" placeholder="price (€)" class="text-center"><br>
            <input type="text" name="description" placeholder="" class="p-5 text-justify"><br>
            <input type="submit" name="submit" placeholder="" class="btn btn-success border rounded m-auto">
        </form>
        <!-- Success message  and link back-->
        <div class="text-center">
            <?php
            // if (isset($_POST["submit"])) {
            //     if (mysqli_query($dbConn, $sql) == true) {
            //         echo "<span class='text-light bg-success p-2 mb-2'>New dish successfully added</span><br>
            //     <a href='../index.php' class='btn btn-outline-primary m-auto'>Return to Menu</a>";
            //     };
            // }
            echo $message;
            ?>
        </div>
    </div>
</body>

</html>