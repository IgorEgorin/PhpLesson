<?php

require_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

$sql = "select * from main_db.pictures";
$gallery = queryAll($sql);

var_dump($gallery);

foreach ($gallery as $value):
    $urlImage = "/img/{$value['path']}";

    var_dump($urlImage);
     ?>
    <a href="/photo.php?id=<?=$value['id']?>" target='_blank'>
        <img src="<?=$urlImage?>" width='200'>
    </a>
<? endforeach;?>