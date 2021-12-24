<?php
include_once __DIR__ . "/../config/main.php";

$directory = PUBLIC_DIR . "folderForDelete";

function remove($dir){

    $files = array_diff(scandir($dir), ['..', '.']);

    foreach ($files as $file) {

        $path = $dir . '/' . $file;

        if (is_dir($path)){
            remove($path);
        } else {
            unlink($path);
        }
    }

    rmdir($dir);
}

remove($directory);