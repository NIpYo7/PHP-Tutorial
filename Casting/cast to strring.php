<?php

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo "<br>";

echo $a; //5
echo "<br>";    
echo $b; //5.34
echo "<br>";    
echo $c; //hello
echo "<br>";    
echo $d; //1        
echo "<br>";  
echo $e; // (an empty string)   
echo "<br>";


?>