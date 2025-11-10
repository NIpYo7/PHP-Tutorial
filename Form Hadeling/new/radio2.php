<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form1" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <input type ="radio" name="radio" value="radio1">Radio 1 <br>
        <input type="radio" name="radio" value="radio2">Radio 2 <br>
        <input type="radio" name="radio" value="radio3">Radio 3 <br> <br>

        <input type="submit" name="submit" value="Select the Radio">

    </form>



    <?php 

    if(isset($_POST['submit'])){
        if(isset($_POST{"radio"})){
            echo "You Selected : ". $_POST['radio'];
        }
    }
    
    
    
    
    
    
    
    ?>
</body>
</html>