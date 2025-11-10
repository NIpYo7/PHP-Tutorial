<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form1" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <select name="cars">
            <option value="volvo">Volvo</option>
            <option value="bmw">BMW</option>
            <option value="audi">Audi</option>
            <option value="mercedes">Mercedes</option>
        </select>
        <input type="submit" name="submit" value="Select the Car">


    </form>

    <?php 
        if(isset($_POST['submit'])){
            if(isset($_POST["cars"])){
                echo "You Selected : ". $_POST['cars'];
                
            }
        }
    
    
    ?>
</body>
</html>