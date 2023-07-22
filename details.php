<?php include 'inc/header.php';
require_once "db_connect.php";

$id = $_GET["id"];                           // to get id from URL. matching to the id from index.php. this id is not the same as ID from db

$sql = "SELECT * FROM `BOOKS` WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

function availabilityBook($availability)
{
    if ($availability > 0) {
        echo "<div class='text-success'>Book is available</div>";
    } else {
        echo "<div class='text-danger'>Book is not available</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card main-card m-4">
        <div class="container text-center bg-light">
            <div class="row text-container">
                <div class="col-md-8 background-text">
                    <div class="card-body text">
                        <h2 class="card-title"><?= $row["author_first_name"] . " " . $row["author_last_name"] ?></h2>
                        <h4 class="card-title"><?= $row["title"] ?></h4>
                        <p class="card-text"><small class="text-body-secondary"> <?= $row["type"] ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"> <?= $row["short_description"] ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"> Publisher: <?= $row["publisher_name"] ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"> Published in: <?= $row["publisher_address"] ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"> Published date: <?= $row["publish_date"] ?></small></p>
                        <h3 class="card-text"><small class="text-body-secondary"> <?= availabilityBook($row["availability"]) ?></small></h3>

                    </div>
                </div>

                <div class="col-6 col-md-4"><img src="photos/<?= $row["image"] ?>" width="420px" height="500px" alt=""></div>


            </div>
</body>

</html>