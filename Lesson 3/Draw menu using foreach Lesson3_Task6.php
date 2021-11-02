<?php

$menu = [
    'Дрели',
    'Кафель'
];

    foreach ($menu as $mainMenu) {
        echo '<li class="nav-item">
                <a class="nav-link active" href="#">';
        echo  "<br/>" . $mainMenu . "<p>";


        }
