<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $con=mysqli_connect("localhost","root","");
    if (!$con){
        die("Could not Connect :".mysqli_error($con)); 
    }

    $select_db=mysqli_select_db($con,"php");
    if(!$select_db){
        die("Could not Select database :".mysqli_error($con)); 
    }

  //create table BOOK in database
    $q1="CREATE TABLE Book (
    Titles VARCHAR(100) NOT NULL,
    Author VARCHAR(100) NOT NULL,
    No_Of_Copies INT NOT NULL)
    ";

    mysqli_query($con,$q1);

    //insert data to book table

    $query= "INSERT INTO Book (Titles,Author,No_Of_Copies) VALUES ('PHP_Basics','Nipun',35)";

    $insert=mysqli_query($con,$query);

    if(!$insert){
        die("Could no run the Query :".mysqli_error($con)); 


    }

    echo "Successfully Inserted";

    mysqli_close($con);




    ?>
</body>
</html>