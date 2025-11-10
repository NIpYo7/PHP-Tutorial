<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $file=fopen("sample.txt",'r') or exit ("Unable to open file!");
    while (!feof($file)){
        echo  fgetc($file)."<br>";
    }
    fclose($file);
    
    
    
    
    
    
    ?>

    <?php 

    unlink("file01.txt");
    
    
    
    ?>
</body>
</html>