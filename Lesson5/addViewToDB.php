<?php

require_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function addViewToDB(int $goodId){
    getConnection();
    return execute("UPDATE pictures 
    SET views = views + 1 WHERE id = {$goodId}");
}

addViewToDB(9);
echo  "Hello world";