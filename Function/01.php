
// Passing by Value vs Passing by Reference
<?php 
    function addFive($num){
        $num += 5;
    }
    $orignum=10;
    addFive($orignum);
    echo "<br>orginal value is : $orignum<br>"; //output will be 10
    addFive($orignum);
    echo "orginal value is : $orignum<br>"; //output will be 10


?>

// Passing by Reference
<?php
    function addTen(&$num){ //& to pass by reference
        $num += 10;
    }
    $orignum=10;
    addTen($orignum);
    echo "<br>orginal value is : $orignum<br>"; //output will be 20
    addTen($orignum);
    echo "orginal value is : $orignum<br>"; //output will be 30
?>