<?php
$x = 5;

echo "Initial value: x = $x\n\n";

// 1. Pre-increment
echo "++x = " . (++$x) . " (x is now $x)\n"; // 6

// Reset x
$x = 5;

// 2. Post-increment
echo "x++ = " . ($x++) . " (x is now $x)\n"; // 5

// Reset x
$x = 5;

// 3. Pre-decrement
echo "--x = " . (--$x) . " (x is now $x)\n"; // 4

// Reset x
$x = 5;

// 4. Post-decrement
echo "x-- = " . ($x--) . " (x is now $x)\n"; // 5
?>
