<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $filename="sample.txt";
    $file=fopen($filename,'r');
    if($file==false){
        echo ("Error Opening File");
        exit();
    }
    $filesize=filesize($filename);
    $filetext=fread($file,$filesize);
    fclose($file);

    echo ("file size : $filesize bytes");
    echo ("<pre>$filetext</pre>");

    
    ?>


    <?php 
    $file_name="sample02.txt";
    $file_=fopen($file_name,'w');
    if($file_ ==false){
        echo "Cant Open the File";
        exit();
    }
    $text="I hate You";
    $write=fwrite($file_ ,$text);
    fclose($file_);

    echo ("written text is : $write");
    
    
    
    ?>
</body>
</html>