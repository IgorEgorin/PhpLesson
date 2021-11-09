<?php

$menu = [
    'Дрели' => ['Bosch', 'Makita'],
    'Кафель' => ['Красный', 'Синий']
];

    foreach ($menu as $key => $value) {
        echo '<li class="nav-item">
                <a class="nav-link active" href="#">';
        echo  "<br/>" . $key . "<p>";
        foreach ($value as $nameOfSubmenu){
            echo  "<br/>" . $nameOfSubmenu . "<p>";
        }
    }
