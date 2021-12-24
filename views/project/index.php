<?
include $_SERVER['DOCUMENT_ROOT'] . '/views/project/header.php';


$r = $clMysql->query("SELECT * FROM Product"); //выполяем запрос, запишем результат в r
while ($row = $r->getRow()) //перебирем все строки и получаем объект (запишем в row)
{

    ?>
    <a href="/views/project/detail?id=<?=$row->id_row?>" style="display: block;">


<img alt="" src="/public/goodsForStore/<?=$row->file_name ?>" style="height: 200px;">
    </a>
<?php
}



echo $r->rowCount(); //количество строк



include $_SERVER['DOCUMENT_ROOT'] . '/views/project/footer.php';
?>

