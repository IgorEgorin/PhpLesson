<form action="Add photo in project.php" method="post" enctype="multipart/form-data">
<input type="file" name="image">
<button type="submit">Submit</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $error = array();
        $name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];

        var_dump($size);
        if ($size >= 600000){
            $error[] = 'file not 120';
        } else {
            move_uploaded_file($tmp_name, __DIR__ . "/../public/img/" . $name);
            echo "файл был загружен";
        }


}

