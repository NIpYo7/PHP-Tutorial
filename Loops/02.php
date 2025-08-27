<?php

$i=1;
while ($i < 10) {
    if ($i++3){
        break;
    }
    echo $i;
    echo "<br>";
    $i++;
}


?>