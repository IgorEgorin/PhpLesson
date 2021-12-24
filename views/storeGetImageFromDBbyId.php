<?php
include_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "gallery.php";

$idImage = (int) $_GET['id'];
$storeImage = getImageStore($idImage);
$feedbackFromDB = getFeedbackById($idImage);



include VIEWS_DIR . "storeItemLayout.php";