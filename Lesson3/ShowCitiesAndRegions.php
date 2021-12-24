<?php

$regions = [
    'Московская обл.' => ['М' => 'Москва', 'З' =>  'Зеленоград','К' =>  'Клин'],
    'Ленинградская обл.' => ['С' => 'Санкт-Петербург', 'В' => 'Всеволожск', 'П' => 'Павловск','К' =>  'Кронштадт']
];

function showRegions($regions){
    foreach ($regions as $region => $cities) {
        if (is_array($cities))
            echo '<br>' . $region . ":" . '<br>';
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
}

?>

<p><?php echo showRegions($regions);?></<p>