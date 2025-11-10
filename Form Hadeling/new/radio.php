<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <h2>radio Buttons validation in PHP </h2>
     
    <form name="form1" method="POST"  action="<?php echo $_SERVER["PHP_SELF"];?>">
        <input type ="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="female">Female <br>
        <input type="submit" name="submit" value="Select the Gender">
    </form>

<?php 
$male_status="unchecked";
$female_status="unchecked";
if(isset($_POST["submit"])){
    $select_radio=$_POST["gender"];
    if($select_radio=="male"){
        $male_status="checked";
        echo "You selected Male";
    }
    else if($select_radio=="female"){
        $female_status="checked";
        echo "You selected Female";
    }
    else{
        echo "Please Select the Option";
    }
}







?>



    
</body>
</html>