<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "gallery.php";


$id = (int) $_GET['id'];

$imagesForStore = getAllImagesStore();


include VIEWS_DIR . "/storeShowAllCatalog.php";
