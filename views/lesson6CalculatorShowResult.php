<?php
include_once __DIR__ . "/../config/main.php";
$result = require ROOT_DIR . "/Lesson6/Calculator.php";

?>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <b>Результат</b>
    <br>
    <?= $result ?>
</body>
</html>
