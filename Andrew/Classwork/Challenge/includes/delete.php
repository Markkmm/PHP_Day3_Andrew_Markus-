<?php

require_once 'db_connect.php';

if (isset($_GET["dishID"])) {
    $id = $_GET["dishID"];
    $sql = "DELETE FROM dishes WHERE dishID = $id;";

    // Check if the query is successful
    if (mysqli_query($dbConn, $sql)) {
        echo "<div class='container text-center'><span class='m-4 p-2 bg-danger text-light'>Dish deleted</p><a href='../index.php' class='btn btn-outline-primary'>Back to Menu</a></div>";
    } else {
        echo "An error occurred " . mysqli_error($dbConn);
    };
}