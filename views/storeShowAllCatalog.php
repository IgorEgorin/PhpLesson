<?php

foreach ($imagesForStore as $imageStore) :
    $urlToImage = "/public/goodsForStore/{$imageStore['title']}";
    ?>
    <a href="/views/storeGetImageFromDBbyId.php?id=<?= $imageStore['id'] ?> " target="_blank" >
        <img src="<?= $urlToImage ?>" width='200'>
    </a>

<? endforeach;?>
