<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $arr=array(1,2,array(5,10,15,20),4);

    $file=fopen("array.txt",'w');

    $nested_sum=0;

    foreach($arr as $element){
        if(is_array($element)){
            $nested_sum=array_sum($element);
            break;

        }
    }

    fwrite($file,"Orginal array : ". print_r($arr,true)."<br>");
    fwrite($file,"Sum of the nested array : ".$nested_sum."<br>");

    fclose($file);

    echo "File Created and Sum of the nested array is : " .$nested_sum;
    
    
    
    
    
    
    ?>
</body>
</html>