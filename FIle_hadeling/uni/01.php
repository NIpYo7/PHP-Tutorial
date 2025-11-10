<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $file="first.txt";
    $file_open=fopen($file,'r+') or exit("Camt Open the file");
    $text="phpMyAdmin is a free software tool written in PHP, intended to handle the administration
of MySQL over the Web.";
    fwrite($file_open,$text);

    $f_size=filesize($file);

    rewind($file_open);
   
    $read_file=fread($file_open,$f_size);
    
    

    echo "File : $read_file";
    fclose($file_open);

    
    ?>
</body>
</html>