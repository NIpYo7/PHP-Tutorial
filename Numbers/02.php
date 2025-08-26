<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x)); //bool(true)

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x)); //bool(false)
echo "<br>";

var_dump(is_float($x)); //bool(true)





?>