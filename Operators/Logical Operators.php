<?php
$a = true;
$b = false;

echo "a = true, b = false\n\n";

// 1. Logical AND
var_dump($a and $b);   // false
var_dump($a && $b);    // false

// 2. Logical OR
var_dump($a or $b);    // true
var_dump($a || $b);    // true

// 3. Logical XOR
var_dump($a xor $b);   // true (only one is true)
var_dump($a xor true); // false (both are true)

// 4. Logical NOT
var_dump(!$a);         // false (negation of true)
var_dump(!$b);         // true  (negation of false)
?>
