<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="form1" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Phone Number :
        <input type="text" name="pnumber" placeholder="fuck">
        <br>
        <input type="submit" name="button">





    </form>


    <?php 

    if(isset($_POST["button"])){
        $phone=$_POST["pnumber"];
        //validate phone number format

        if(!preg_match("/^\(\+[0-9]{2}\)[0-9]{9}$/", $phone)){
            echo "Invalid Phone Number";
            die();

        }
        else{
            echo "Valid Phone Number : $phone";
        }
    }
    
    
    
    
    ?>
</body>
</html>