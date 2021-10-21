<?php

include_once __DIR__ . "/../config/main.php";

$directory = PUBLIC_DIR . "img";

$images = array_filter(
    scandir($directory),
    function ($item) use ($directory) {
        return !is_dir($directory . "/" . $item);
    }
);

foreach ($images as $image):
    $imgUrl = "/public/img/{$image}";
    ?>
    <a href="<?= $imgUrl ?>" target='_blank'>
        <img src="<?= $imgUrl ?>" width='200'>

    </a>

<? endforeach;
