<?php
include_once __DIR__ . "/../config/main.php";

$directory = PUBLIC_DIR . "folderForDelete";

//var_dump($directory);

function removeDir($dir){
    $files = array_diff(scandir($dir), ['..', '.']);

    foreach ($files as $file) {
        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            var_dump($path);
        } else {
            var_dump($path);
        }
    }

}

removeDir($directory);