<?php

foreach ($images as $image) :
    $imgUrl = "/public/img/{$image['path']}";
    ?>
    <a href="/views/photo.php?id=<?= $image['id'] ?>" target="_blank" >
        <img src="<?= $imgUrl ?>" width='200'>
    </a>
<? endforeach;?>