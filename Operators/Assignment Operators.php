<?php
$a = 10;

echo "Initial value: a = $a\n\n";

// 1. Simple assignment
$a = 10;
echo "a = 10 → $a\n"; // 10

// 2. Add and assign
$a += 5;   // a = a + 5
echo "a += 5 → $a\n"; // 15

// 3. Subtract and assign
$a -= 3;   // a = a - 3
echo "a -= 3 → $a\n"; // 12

// 4. Multiply and assign
$a *= 2;   // a = a * 2
echo "a *= 2 → $a\n";// 24

// 5. Divide and assign
$a /= 4;   // a = a / 4
echo "a /= 4 → $a\n";   // 6

// 6. Modulus and assign
$a %= 3;   // a = a % 3
echo "a %= 3 → $a\n";   // 0

// 7. Exponentiation and assign
$a **= 3;  // a = a ** 3
echo "a **= 3 → $a\n"; // 0
?>
