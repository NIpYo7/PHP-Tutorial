<?php
$a = 10;
$b = "10";
$c = 20;

echo "a = $a (int), b = \"$b\" (string), c = $c (int)\n\n";

// 1. Equal
var_dump($a == $b);   // true (values are equal, types ignored)
echo "\n";

// 2. Identical
var_dump($a === $b);  // false (int vs string)
echo "\n";

// 3. Not equal
var_dump($a != $b);   // false
var_dump($a <> $b);   // false (same as !=)
echo "\n";
echo "\n";

// 4. Not identical
var_dump($a !== $b);  // true (different types)
echo "\n";

// 5. Greater than
var_dump($c > $a);    // true (20 > 10)
echo "\n";

// 6. Less than
var_dump($a < $c);    // true (10 < 20)
echo "\n";

// 7. Greater than or equal
var_dump($a >= 10);   // true
echo "\n";

// 8. Less than or equal
var_dump($a <= $c);   // true
echo "\n";

// 9. Spaceship operator (<=>)
echo "Spaceship comparisons:\n";
echo ($a <=> $b) . "\n"; // 0 (equal values)
echo ($a <=> $c) . "\n"; // -1 (10 < 20)
echo ($c <=> $a) . "\n"; // 1 (20 > 10)
?>
