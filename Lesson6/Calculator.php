<?php
include_once __DIR__ . "/../config/main.php";
require VIEWS_DIR . "lesson6CalculatorForm.php";

if (empty($_GET)) {
    return "Значение не переданы";
}

if (empty($_GET['operation'])) {
    return "Операция не передана";
}

if (empty($_GET['fieldOne'] || empty($_GET['fieldTwo'] ))){
    return "Надо указать оба значения";
}

if ($_GET['fieldTwo'] == 0 && $_GET['operation'] == 'Деление'){
    return "/";
}

$x1 = $_GET['fieldOne'];
$x2 = $_GET['fieldTwo'];

$whatWeCalculate = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+';
    $result = $x1 + $x2;
    break;
    case '-';
    $result = $x1 - $x2;
    break;
    case '*';
    $result = $x1 * $x2;
    break;
    case '/';
    $result = $x1 / $x2;
    break;

}


return $whatWeCalculate . $result;

require VIEWS_DIR . "lesson6CalculatorShowResult.php";
