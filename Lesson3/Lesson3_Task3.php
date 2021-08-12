<?php

$cities = [
    'Московская обл.' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская обл.' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']
];

foreach ($cities as $key => $value) {
    if (is_array($value))
    echo '<br>' . $key . ":" . '<br/>';
    foreach ($value as $x){
        print($x) . ', ';
    }
}
?>
