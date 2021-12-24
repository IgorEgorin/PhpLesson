<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "gallery.php";

$images = getGalleryImages();

include VIEWS_DIR . "/gallery.php";

