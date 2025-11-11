<?php 
if(isset($_GET['btn'])){
    $name=$_GET["name"];
    $age=$_GET["age"];
    
    echo "WELCOME".$name.","."You are".$age."old.....!";

}

?>