<?php

require_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function addViewToDB(int $goodId){
    getConnection();
    return execute("UPDATE pictures 
    SET views = views + 1 WHERE id = {$goodId}");
}
//addViewToDB(9);
$sql = "select * from main_db.pictures";
$gallery = queryAll($sql);

//var_dump($gallery);

foreach ($gallery as $value):
    $urlImage = "/img/{$value['path']}";

    var_dump($urlImage);
//    var_dump($value['id']);
//    ?>
    <a href="/photo.php?id=<?=$value['id']?>" target='_blank'>
        <img src="<?=$urlImage?>" width='200'>
    </a>
<? endforeach;?>