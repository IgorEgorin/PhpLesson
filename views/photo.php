<?php
include_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "gallery.php";

$id = (int) $_GET['id'];
$image = getGalleryImageById($id);

include VIEWS_DIR . "galleryIfImageOne.php";