<?php

include_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

//$id = (int) $_GET['id'];

function getAllImagesStore() {
    return queryAll("select * from ImageForStore");
}

function getFeedbackById(int $id) {
    return queryOne("select * from FeedbackForStore where id= {$id}");
}

function getImageStore(int $id) {
    return queryOne("select * from ImageForStore where id = {$id}");
}

function getGalleryImages() {
    return queryAll("SELECT * FROM pictures ORDER BY views DESC");
}

function getGalleryImageById(int $id) {
    addViewToDb($id);
    return queryOne("SELECT * FROM pictures WHERE id = {$id}");
}

function addViewToDb(int $id) {
    return execute("UPDATE pictures SET views = views + 1 WHERE id = {$id}");
}