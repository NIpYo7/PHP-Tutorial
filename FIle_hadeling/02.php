<?php 
$my_file="file01.txt";
$hadle=fopen($my_file,'w') or die ("cannot open file :" .$my_file);
$data="This is the data";
fwrite($hadle,$data);
fclose($hadle);

?>