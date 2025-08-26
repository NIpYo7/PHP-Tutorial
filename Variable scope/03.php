<?php

function mytest(){
    $y=10; //local variable
    echo "<p> variable y inside function is : $y</p >";
} 
mytest();
//using y outside the function will generate an error

echo "<p>Variable x Outside function is : $y</p>";






?>