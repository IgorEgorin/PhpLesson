<?php


function replaceString(string $str){
    return str_ireplace(' ','_',$str);
}

?>

<h1><?php echo replaceString('Строка с пробелами');?></<h1>
