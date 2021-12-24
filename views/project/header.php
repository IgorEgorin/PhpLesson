<?php
//подключаем файл
include_once $_SERVER['DOCUMENT_ROOT'] . '/views/project/clMysql.php';

$clMysql = new clMysql(); //создаём экземляр класса
$clMysql->connectDB(); //соединяемся с БД
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
