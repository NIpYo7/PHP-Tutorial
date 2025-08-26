<?php

//PHP Vraiable Scope


// local , global , static

$x=5; //global variable
function mytest(){
    //using x inside this function will generate an error
    echo "<p> variable x inside function is : $x</p>";
}
mytest();
echo "<p> variable x outside function is : $x</p>";

//A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function


#-----------------------------------------------------------------------------------

?>

