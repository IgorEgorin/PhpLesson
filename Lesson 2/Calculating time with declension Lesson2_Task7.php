<?php


define('HOUR',date('G'));
define('MINUTES',date('i'));
define('EMPTY_END',date(''));
define('LETTER_A',date('а'));


function returnEndOfHour(){

    if (HOUR == 1 || HOUR == 21){
        return EMPTY_END;
    }
    elseif (HOUR >= 2 && HOUR <= 4 || HOUR >=  22 && HOUR <=  24){
        return LETTER_A;
    }
    else{
        return "ов";
    }
}
function returnEndOfMinutes(){

    if (MINUTES == 1 || MINUTES ==  21 || MINUTES ==  31 || MINUTES ==  41 || MINUTES ==  51 ){
        return LETTER_A;
    }
    elseif (MINUTES >= 2 && MINUTES <=  4 || MINUTES >=  22 && MINUTES <=  24
        || MINUTES >=  32 && MINUTES <=  34 || MINUTES >=  42 &&
        MINUTES <= 44 || MINUTES >=  52 && MINUTES <=   54){
        return "ы";
    }
    else{
        return EMPTY_END;
    }
}

function getTime(){
    echo HOUR . ' час' . returnEndOfHour() . ' ' . MINUTES . ' минут' . returnEndOfMinutes() ;
}

?>

<p><?php echo getTime();?></<p>
