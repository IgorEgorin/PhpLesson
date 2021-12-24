<form action="AddPhotoInProject.php" method="post" enctype="multipart/form-data">
<input type="file" name="image">
<button type="submit">Submit</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $message = array();
    $fileFormatJpeg = 'image/jpeg';
    $fileFormatPng = 'image/png';
    $maxPictureSize = 800000;

    $name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    $type = $_FILES['image']['type'];

    if (($type == $fileFormatJpeg || $type == $fileFormatPng) && $size <= $maxPictureSize){
        move_uploaded_file($tmp_name, __DIR__ . "/../public/img/" . $name);
        echo "File was loaded";
    }
    else {
        $message[] = "'file not is '$fileFormatJpeg' , '$fileFormatPng' or more than '$maxPictureSize'";
    }


}
