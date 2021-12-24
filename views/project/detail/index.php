<?
include $_SERVER['DOCUMENT_ROOT'] . '/views/project/header.php';

print_r($_POST);
$id = (intval($_REQUEST['id']));
//$id = mysqli_escape_string($clMysql->connection,$_REQUEST['test']);
$r = $clMysql->query("select id_row, file_name from Product where id_row='$id'");

if ($r->rowCount() <> 0){


    $rowObject = $r->getRow();
    ?><img alt="" src="/public/goodsForStore/<?=$rowObject->file_name ?>" style="height: 200px;"><?

    $rFeedback = $clMysql->query("select text from Feedback where product_id_row=$id");

    while ($rowFeedback = $rFeedback->getRow()){
      ?>  <div>
            <?
            echo $rowFeedback->text;
            ?>
        </div>
        <?php
    }


    ?>
<div>
     <form action="/views/project/detail" method="get">
         <input type="hidden" name="id" value="<?=$id?>">
         <input type="text" name="getFeeback" >
         <input type="submit" value="Отправить">
     </form>

</div>


<?php


}





include $_SERVER['DOCUMENT_ROOT'] . '/views/project/footer.php';

?>

