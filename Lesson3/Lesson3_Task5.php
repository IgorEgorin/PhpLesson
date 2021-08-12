<?php


function replaceString(string $str){
        return str_ireplace(' ','_',$str);


}


echo replaceString('Строка с пробелами');