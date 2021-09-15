<?php

$regions = [
    'Московская обл.' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская обл.' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']

];

//foreach ($regions as $region => $cities) {
//    if (is_array($cities))
//    echo "\n" . $region . ":" . "\n";
//    foreach ($cities as $index => $cityName ){
//        print($cityName);
//        if ( count($cities) - 1 !== $index){
//            print ', ';
//        }
//    }
//}

$regions = [
    'Московская обл.' => ['М' => 'Москва', 'З' =>  'Зеленоград','К' =>  'Клин'],
    'Ленинградская обл.' => ['С' => 'Санкт-Петербург', 'В' => 'Всеволожск', 'П' => 'Павловск','К' =>  'Кронштадт']
    ];

foreach ($regions as $region => $cities) {
    if (is_array($cities))
    echo "\n" . $region . ":" . "\n";
    $iteration = 0;
    $citiesCount = count($cities);
    foreach ($cities as $cityName ){
        $iteration++;
        print($cityName);
        if ( $citiesCount !== $iteration ){
            print ', ';
        }
    }
}