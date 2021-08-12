<?php

define('PUBLIC_DIR', 'IgorDirectory');

$directorySub = PUBLIC_DIR . "/SubDirectory";
$files = array_filter(
    scandir($directorySub),
    function ($item) use ($directorySub) {
        return !is_dir($directorySub . "/" . $item);
    }

);

var_dump($files);