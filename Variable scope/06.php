<?php

function updatecounter(){
    static $counter=0;
    $counter ++;
    echo "Static counter is now {$counter}<br>";
}

$counter=10;
updatecounter();
updatecounter();
echo "Global Counter is {$counter}\n";

?>