<?php
//function will upload images
function uploadFile($image)   //$_FILES["image"]

{
    if ($image["error"] == 4) {    //if photo was not upload, standart picture be posted
        $ImgName = "photos/dummy.jpg";
        $message = "No book cover, but you can add it later";
    } else {
        $checkType = getimagesize($image["tmp_name"]);    //check if img extensions is correct
        $message = $checkType ? "Ok" : "Chose another extension of you image";
    }

    if ($message == "Ok") {                                 //if everything is ok, extension has to be change to lowercase 
        $ext = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
        $ImgName = uniqid("") . "." . $ext;                 //create new unique name for img

        $destination = "photos/{$ImgName}";                 //image will be safe in folder photos 
        move_uploaded_file($image["tmp_name"], $destination);
    }

    return [$ImgName, $message];
}
