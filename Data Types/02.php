<?php
$x="Hello Word!";
$y="Hello Word!";




var_dump($x); //string(11) "Hello Word!"
echo "<br>";
var_dump($y); //string(11) "Hello Word!"
echo "<br>";
var_dump($x==$y); /*string(11) "Hello Word!"
                    string(11) "Hello Word!"
                    bool(true)*/


$t=7678;
echo "<br>";
var_dump($t); //int(7678)

$r=19.67;
echo "<br>";
var_dump($r); //float(19.67)


$g=null;
echo "<br>";
var_dump($g); //NULL

echo "<br>";
// Changing the Data Type

$u = 5;
$u = (string) $u;
var_dump($u); //string(1) "5"




?>