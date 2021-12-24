<?php

?>
<html>
<body>
<form action="/views/lesson6CalculatorShowResult.php">
    <input type="number" name="fieldOne">
    <select name="operation">
        <option value="+">Сложение</option>
        <option value="-">Вычитание</option>
        <option value="*">Умножение</option>
        <option value="/">Деление</option>
    </select>
    <input type="number" name="fieldTwo">
    <input type="submit" value="Посчитать">
</form>
</body>
</html>
