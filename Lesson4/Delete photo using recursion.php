<?php
include_once __DIR__ . "/../config/main.php";

$directory = PUBLIC_DIR . "folderForDelete";

//var_dump($directory);

function scan($dir){

    $d = opendir($dir);

    while ( false !== ($name = readdir($d)) ){
        if ( $name == '.' or  $name == '..' ) continue;
        if ( is_dir($dir . '/' . $name )) {
            scan( $dir . '/' . $name);
//            var_dump($name);
        }else{
            unlink($dir . '/' . $name);
//            var_dump($name);
        }
    }
    rmdir($dir);
}

scan($directory);