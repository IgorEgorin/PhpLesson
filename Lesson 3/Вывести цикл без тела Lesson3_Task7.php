<?php

function runLoop(){
    $i=0;
    for(;;)
    {
        print $i.' ';
        $i++;
        if ($i>=10){
            break;
        }
    }
}

?>

<p><?php echo runLoop();?></<p>