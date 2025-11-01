<!-- <?php
function printArg(){
    $numargs=func_num_args();
    echo "number of arguments : $numargs<br>"; //print 3
}
printArg(10,20,30);
?>

<?php
function showargs(){
    $numargs=func_num_args();
    echo "number of arguments : $numargs<br>"; //print 3
    if($numargs>2){
        echo "second argument is : ".func_get_arg(1)."<br>"; // print 5
    }

    
}
showargs(1,5,3);
?>

<?php 
function showarry(){

    $numargs=func_num_args();
    echo "<br><br>number of arguments : $numargs<br>"; //print 3
    if($numargs>=2){
        echo "second argument is : ".func_get_arg(1)."<br>"; // print Array

    }
    $arglist=func_get_args();
    for($i=0;$i<$numargs;$i++){
        echo "argument $i is : ".$arglist[$i]."<br>";// print all arguments
    }


}
showarry(1,5,3);
?> -->



<?php
function dynamic_args(){
    for($i=0;$i<func_num_args();$i++){
        echo "argument ".($i+1)." is : ".func_get_arg($i)."<br>";
    }
    $args=func_get_args();
    // Note: Argument indices in output are 1-based (i.e., $key+1$), not 0-based.
    foreach($args as $key=>$arg){
        echo "argument ".($key+1)." is : $arg<br>";
    }
        $index++;
    }
    dynamic_args("a","b","c","d","e");
dynamic_args("a","b","c","d","e");
?>

