<?php
include 'inc/header.php';
require_once "db_connect.php";

if (isset($_GET['publisher_id'])) {
    $publisher_id = $_GET['publisher_id'];
    $sql = "SELECT * FROM `BOOKS` WHERE publisher_name = '$publisher_id'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {                //check if there are books from specific publisher, if there is -> print the header
        echo "<h1>All books from publisher:</h1>";

        while ($row = mysqli_fetch_assoc($result)) {    //loop checks all books of specific publisher
            echo "<div>
            <p class='mt-5'>{$row['title']}</p>
            <p><img src='photos/{$row["image"]}' class='card-img-top ' style='width: 150px; 'height = 200px alt='...'></p>
            </div>";
        }
    }
} else {
    echo "<h1>Error: Publisher ID not provided</h1>";     //if id was not provided, error message will pop up
}
?>

<div class='d-flex justify-content-center mb-5'><a href='index.php' class='btn btn-light'>Home</a> </div>


<?php include 'inc/footer.php';
?>