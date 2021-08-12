<?php


define('HOUR',date('G'));
define('MINUTES',date('i'));

function returnEndOfHourSwitch()
{
//break можно и удалить
    switch (HOUR) {
        case 1:
        case 21:
            return "";
            break;
        case 2:
        case 3:
        case 4:
        case 22:
        case 23:
        case 24:
            return "а";
            break;
        default:
            return "ов";
    }
}

function returnEndOfMinutesSwitch(){

    switch (MINUTES) {
        case 1:
        case 21:
        case 31:
        case 41:
        case 51:
            return "а";
            break;
        case 2:
        case 3:
        case 4:
        case 22:
        case 23:
        case 24:
        case 32:
        case 33:
        case 42:
        case 43:
        case 44:
        case 52:
        case 53:
        case 54:
            return "ы";
            break;
        default:
            return "";
    }
}

function getTimeSwicthCase(){
    echo HOUR . ' час' . returnEndOfHourSwitch() . ' ' . MINUTES . ' минут' . returnEndOfMinutesSwitch() ;
}

getTimeSwicthCase();