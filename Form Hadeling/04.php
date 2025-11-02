<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error{color:"red";}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //defining varibale and set empty values
        $name=$email=$gender=$comment=$website="";
        $nameErr=$emailErr=$genderErr=$commentErr=$websiteErr="";
        // if($_SERVER["REQUEST_METHOD"]=="POST"){
        //     $name=test_input($_POST["name"]);
        //     $email=test_input($_POST["email"]);
        //     $website=test_input($_POST["website"]);
        //     $comment=test_input($_POST["comment"]);
        //     $gender=test_input($_POST["gender"]);
        // }

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr="name is requred";

            }else{
                $name=test_input($_POST["name"]);
                //check is name only contain letters and whitespaces
                if(!preg_match("/^[a-zA-Z_' ]*$/",$name)){
                    $nameErr="Only letters and white spaces allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr="email is requred";
            }else{
                $email=test_input($_POST["email"]);
                //check email is well formated
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr="invalid email format";
                }
            }



            if(empty($_POST["website"])){
                $websiteErr="URL is requred";
            }else{
                $website=test_input($_POST["website"]);
            }

            if(empty($_POST["comment"])){
                $commentErr="Comment is requred";
            }else{
                $comment=test_input($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr="Genfer is requred";
            }else{
                $gender=test_input($_POST["gender"]);
            }
        }


        
        
        
        
        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
    
    ?>





   



    <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    
    <h2>PHP Form Validation Example</h2><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <span class="error">*<?php echo $nameErr?></span> <br><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <span class="error">*<?php echo $emailErr?></span><br><br>

    <label for="website">Website:</label>
    <input type="text" id="website" name="website"><br><br>
    <span class="error">*<?php echo $websiteErr?></span><br><br>

    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment"></textarea><br><br>
    <span class="error">*<?php echo $commentErr?></span><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="male"> male
    <input type="radio" id="female" name="gender" value="female">female
    <input type="radio" id="other" name="gender" value="other">Other<br><br><br>
    <span class="error">*<?php echo $genderErr?></span><br><br>


    <input type="submit" value="Submit">
    </form>

    <h2>Your Input:</h2>

    <?php



        echo "<br>Your Name :$name<br>";
        echo "<br>Your Email :$email";
        echo "<br>Your website :$website";
        echo "<br>Your Comment :$comment";
        echo "<br>Your Gender : $gender";
        
    
    ?>
</body>
</html>
