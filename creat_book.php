<?php include 'inc/header.php';
require_once "db_connect.php";
require_once "upload_file.php";

if (isset($_POST["add"])) {    //if button Add New Book clicked we take values from the input
    $title = $_POST["title"];
    $image = uploadFile($_FILES["image"]);
    $type = $_POST["type"];
    $short_description = $_POST["short_description"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_address = $_POST["publisher_address"];
    $publisher_name = $_POST["publisher_name"];
    $publish_date = $_POST["publish_date"];


    $sql = "INSERT INTO `BOOKS`(`title`, `image`, `type`, `short_description`, `author_first_name`, `author_last_name`, `publisher_address`, `publisher_name`, `publish_date`) VALUES ('$title','$image[0]','$type','$short_description','$author_first_name','$author_last_name','$publisher_address','$publisher_name','$publish_date')";


    if (mysqli_query($connect, $sql)) {                          //if everything runs well, alert with success will pop up and header() will redirect to index.php in 2 sec
        echo "<div class='alert alert-success' role='alert'>    
  Your book is successfully updated! 
</div>";
        header("refresh: 2 url = index.php");
    } else {                                                     //if smt went wrong alert with error pop up

        "<div class='alert alert-danger' role='alert'> Try again later.
</div>";
    }
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <div class='container mt-5'>
        <div>
            <h2 class="d-flex justify-content-center">Add your book</h2>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title of the book" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Cover</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Upload book cover picture here" name="image">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book type</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Audio, Book, Podcast" name="type">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Author Name" name="author_first_name">
                <input type="text" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Author Last Name" name="author_last_name">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description"></textarea>

            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Publisher</label>
                <input type="date   " class="form-control" id="exampleFormControlInput1" placeholder="Publish Date" name="publish_date">
                <input type="text" class="form-control  mt-3" id="exampleFormControlInput1" placeholder="Publisher Name" name="publisher_name">
                <input type="text" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Publisher Address" name="publisher_address">

            </div>

            <div class="d-flex justify-content-center m-5 "><button name="add" type="submit" class="btn btn-light">Add New Book</button></div>

        </form>
    </div>
</body>

</html>


<?php include 'inc/footer.php' ?>