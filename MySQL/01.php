<?php 
$host="localhost";
$username="root";
$password="";

$link=mysqli_connect($host,$username,$password);
if(!$link){
    die ("Could not Connect the : ".mysqli_error($link));
}


//select the test database

$db_selected=mysqli_select_db($link,"test");
if (!$db_selected){
    die ("Cant use test database: ".mysqli_error($link));
}

echo "Connect Succesfully";

mysqli_close($link);



?>