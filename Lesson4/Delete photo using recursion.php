<?php
include_once __DIR__ . "/../config/main.php";

$directory = PUBLIC_DIR . "folderForDelete";

$files = array_diff(scandir($directory), ['..', '.']);
//var_dump($files);

foreach ($files as $file):
        var_dump($file);

    ?>


<? endforeach;
