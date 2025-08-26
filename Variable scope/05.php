<?php
 function mytest(){
    static $x=0; //static variable
    echo "<p> variable x inside function is : $x</p>";
    $x++;   }

    mytest();
    mytest();
    mytest();





?>