
<?php
$cars=array("Toyota","MBW","Dolpin");
echo count ($cars);
echo "<br>";
$scores=array(56,87,67,87);
echo array_sum($scores);
echo "<br>";
array_push($cars,"benz","audi");
echo "<br>";
var_dump($cars);
echo "<br>";
unset($cars[1]);
var_dump($cars);
echo "<br>";
echo is_array($cars);
echo "<br>";
echo in_array("Toyota",$cars);


?>