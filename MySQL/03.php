<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //login to the server
    $con=mysqli_connect("localhost","root","");
    if (!$con){
        die ("Can not Connect to the DataBase : ".mysqli_error($con));
    }
    //select the database
    $db_connect=mysqli_select_db($con,"php");
    if(!$db_connect){
        die ("Can not select the database :".mysqli_error($con));
    }
    //Updating the row

    $q1="UPDATE book SET No_Of_copies='10' WHERE Titles='PHP_Basics' AND Author ='Nipun'";
    $update=mysqli_query($con,$q1);

    if(!$update){
        die("Can not Update the Rows :".mysqli_error($con));
    }
    
    echo "<h2>Updated Succsesfully</h2>";
    

    //show affected rows

    if($update==FALSE){
        echo "cant Update the rows";
    }
    else{
        echo "<h3>succesfully Updated </h3>".mysqli_affected_rows($con)."<h3>Records</h3>";
    }


    //show summary updated

    $q3="   INSERT INTO book
            VALUES ('js_basics','Yohana',50),
                    ('css_basics','Supun',10),
                    ('html_basics','kamal',90)";
    
    $update2=mysqli_query($con,$q3);
    if(!$update){
        echo "cant Update the changes";
    }
    else{
        echo "succsessfully Updated".mysqli_info($con);
    }

    






    //close connection
    mysqli_close($con);


    
    
    
    ?>
</body>
</html>