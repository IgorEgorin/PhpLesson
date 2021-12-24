<?php
include_once __DIR__ . "/../config/main.php";
require_once VIEWS_DIR . "storeGetImageFromDBbyId.php";



if (array_key_exists("textField", $_POST)){
    echo $_POST["textField"];

}

?>
    <img src="/public/goodsForStore/<?= $storeImage['title'] ?>" width="400">
    <p>
        <b>Отзывы</b>
    </p>
    <p><?= $feedbackFromDB['feedback'] ?></p>
    <form action="/views/storeGetImageFromDBbyId.php?id=<?= $_REQUEST['id']?>" method="post">
    <input type="text" name="textField">
    <input type="submit" name="Добавить отзыв">


<?
$x1 = $_GET['textField'];
