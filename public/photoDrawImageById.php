<?php

include_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "gallery.php";


$image = getGalleryImageById();

include VIEWS_DIR . "/galleryIfImageOne.php";

