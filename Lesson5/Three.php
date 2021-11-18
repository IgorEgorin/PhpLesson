<?php

$config = [
    'host' => 'mysql',
    'login' => 'root',
    'password' => 'qwerty',
    'dbName' => 'main_db',
];

$connection = mysqli_connect(
    $config['host'],
    $config['login'],
    $config['password'],
    $config['dbName']
);

$sql = "SELECT * FROM pictures";
$result = mysqli_query($connection, $sql);
$images = mysqli_fetch_all($result, MYSQLI_ASSOC);

//echo '<pre>';
//var_dump($images);

foreach ($images as $image) :
    $imgUrl = "/public/img/{$image['path']}";
    ?>
    <a href="/public/photo.php?id=<?= $image['id'] ?>" target="_blank" >
        <img src="<?= $imgUrl ?>" width='200'>
    </a>
<? endforeach;?>


