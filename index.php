<?php include 'inc/header.php';
require_once "db_connect.php";

$sql = "SELECT * FROM `BOOKS`";             //query to take all the data
$result = mysqli_query($connect, $sql);     //connect db. DB info in db_connect.php
$layout = " ";                              // variable whith details about our books.

if (mysqli_num_rows($result) > 0) {                 //check here if smth in the row, if it is more than 0, we loop through it
    while ($row = mysqli_fetch_assoc($result)) {    //if $result > 0 fetch date to array with mysqli_fetch_assoc
        $layout .= " <div class ='card p-0 mt-3' style='width: 300px; 'height = 70px rounded-0'>
        <img src='photos/{$row["image"]}' class='card-img-top ' alt='...'>    
        <div class='card-body '>
            <h5 class='card-title'>{$row["author_first_name"]} {$row["author_last_name"]}</h5>
            <p class='card-text'> {$row["title"]}</p>
            <p class='card-text'> Publisher: <a href='publisher.php?publisher_id={$row["publisher_name"]}'>{$row["publisher_name"]}</a> {$row["publisher_address"]}</p>
             <p class='card-text'> Type: {$row["type"]}</p> 
              <p class='card-text'> {$row["short_description"]}</p> 
              <p class='card-text'> First published in: {$row["publish_date"]}</p> 
               <p class='card-text'> ISBN: {$row["ID"]}</p> 
             <div class='d-flex justify-content-center'><a href='details.php?id={$row["ID"]}' class='btn btn-light'>Details</a> <a href='update.php?id={$row["ID"]}' class='btn btn-light ms-1'>Edit</a><a href='delete.php?id={$row["ID"]}' class='btn btn-light ms-1'>Delete</a></div>
   
           
        </div>
    </div>";
    }
} else {   //if $result < 0
    $layout .= "<div class ='m-3 d-flex justify-content-center' >No books added. Create new book</div>";
}

?>
<!-- styling of main photo -->
<div class="mt-3 "> <img src="photos/books2.jpg" style='width: 100%; ' height=400px alt="">
</div>
<div class="d-flex  justify-content-around mt-5 ">
    <div class="position-absolute top-50 start-50 translate-middle bg-secondary opacity-75">
        <h2 class="align-middle p-4 text-white">Build your own library</h2>
    </div>
</div>
<!-- styling of main photo end -->
<div class="d-flex justify-content-center"><a href="creat_book.php" class="btn btn-light">Add New Book</a></div>
<div class="d-flex justify-content-around row row-lg-3 row-md-2 row-xs-1 p-2 g-col-6 p-2 g-col-6 plan-main m-5">
    <?= $layout ?>
</div>

<?php include 'inc/footer.php' ?>