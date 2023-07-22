<?php include 'inc/header.php';
require_once "db_connect.php";
require_once "upload_file.php";

$id = $_GET["id"];
$sql = "SELECT * FROM BOOKS WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["update"])) {     //when btn update clicked we update info
    $title = mysqli_real_escape_string($connect, $_POST["title"]);    //function will escape values before inserting them in the SQL query. 
    $image = uploadFile($_FILES["image"]);                             //used it, because some books had syntax issues while updating
    $type = mysqli_real_escape_string($connect, $_POST["type"]);
    $short_description = mysqli_real_escape_string($connect, $_POST["short_description"]);
    $author_first_name = mysqli_real_escape_string($connect, $_POST["author_first_name"]);
    $author_last_name = mysqli_real_escape_string($connect, $_POST["author_last_name"]);
    $publisher_address = mysqli_real_escape_string($connect, $_POST["publisher_address"]);
    $publisher_name = mysqli_real_escape_string($connect, $_POST["publisher_name"]);
    $publish_date = mysqli_real_escape_string($connect, $_POST["publish_date"]);
    $availability = mysqli_real_escape_string($connect, $_POST["availability"]);


    if ($_FILES["image"]["error"] == 0) {     //remove and update picture
        if ($row["image"] != "dummy.jpg") {    //check if it is not defult picture, remove with unlink()
            unlink("photos/$row[image]");
        }

        $sql = "UPDATE `BOOKS` SET `title`='$title',`image`='$image[0]',`type`='$type',`short_description`='$short_description',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_address`='$publisher_address',`publisher_name`='$publisher_name',`publish_date`='$publish_date', `availability`='$availability' WHERE id = $id";
    } else {                                   //if picture was not updated 
        $sql = "UPDATE `BOOKS` SET `title`='$title',`type`='$type',`short_description`='$short_description',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_address`='$publisher_address',`publisher_name`='$publisher_name',`publish_date`='$publish_date', `availability`='$availability' WHERE id = $id";
    }
    if (mysqli_query($connect, $sql)) {
        echo "<div class='alert alert-success' role='alert'>
        Information about book has been updated, {$image[1]}</div>";
        header("refresh:3; url=index.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        Error was found, {$image[1]}
      </div>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <div class='container mt-5'>

        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title of the book" name="title" value="<?= $row["title"] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Cover</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Upload book cover picture here" name="image">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book type</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Audio, Book, Podcast" name="type" value="<?= $row["type"] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Author Name" name="author_first_name" value="<?= $row["author_first_name"] ?>">
                <input type="text" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Author Last Name" name="author_last_name" value="<?= $row["author_last_name"] ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description" value="<?= $row["short_description"] ?>">

            </div>
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Publisher</label>
                <input type="date   " class="form-control" id="exampleFormControlInput1" placeholder="Publish Date" name="publish_date" value="<?= $row["publish_date"] ?>">
                <input type="text" class="form-control  mt-3" id="exampleFormControlInput1" placeholder="Publisher Name" name="publisher_name" value="<?= $row["publisher_name"] ?>">
                <input type="text" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Publisher Address" name="publisher_address" value="<?= $row["publisher_address"] ?>">
                <label for="exampleFormControlInput1" class="form-label mt-3">Availability</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Availability" name="availability" value="<?= $row["availability"] ?>">
            </div>

            <div class="d-flex justify-content-center m-5 "><button name="update" type="submit" class="btn btn-warning">Update</button></div>

        </form>
    </div>
</body>

</html>


<?php include 'inc/footer.php' ?>