<?php

require_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

$sql = "select * from pictures";
$res = mysqli_query(getConnection(), $sql);
var_dump($res);







$images = queryAll($sql)[0];

foreach ($images as $image)
    $imgUrl = "/img/{$image}";
//var_dump($imgUrl);
?>

