<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fileName = $_FILES["image"]["name"];
    $tempName = $_FILES["image"]["tmp_name"];

    $uploadFolder = "uploads/";

    if (!is_dir($uploadFolder)) {
        mkdir($uploadFolder);
    }

    $destination = $uploadFolder . $fileName;

    if (move_uploaded_file($tempName, $destination)) {

        echo "<h2>Image Uploaded Successfully!</h2>";
        echo "<img src='$destination' width='300'>";

    } else {
        echo "Image upload failed.";
    }
}
?>