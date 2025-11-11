<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .box{
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            }
        .btn{
            border-radius: 6px;
            height: 40px;
            width: 60px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
                    }
        td{font-family:cambria;}
        table{border: 1px solid black;}
        th, td {padding:7px;text-align:left;font-weight: bold;}
        h1{color:blur;text-align:center}
        body{background-color:#F5F8AB}

        .checkbox {
            display: flex;
            flex-direction: column;
        }
        
        .checkbox label {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <table>
        <th><h1>Event Registration</h1></th>
        <tr><td><form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="name">Name : </label>
            <input type="text" class="box" name="name"> <br><br>

            <label for="title">Title :</label>
            <input type="radio" name="radio" value="Mr.">Mr.
            <input type="radio" name="radio" value="Mrs.">Mrs.
            <input type="radio" name="radio" value="Mss.">Miss. <br><br>

            <label for="textarea">Adress</label> <br>
            <textarea name="textarea" id="">Address</textarea><br><br>

            <label for="dropdown">Province</label>
            <select name="province" class="box">
                <option value="Central" selected>Central</option>
                <option value="North">North</option>
                <option value="South">South</option>
            </select>  <br><br>

            <label for="checkbox">Event</label>
            <div class=checkbox>
                <label for="">
                    <input type="checkbox" name="event[]" value="faculty meet">Faculty meet
                </label>

                <label for="">
                    <input type="checkbox" name="event[]" value="batch meet">batch meet
                </label>

                <label for="">
                    <input type="checkbox" name="event[]" value="university games">university games
                </label>

                
        
            
        
        
            </div>
            <br><br>
            <input type="submit" value="Submit" class="btn">
            <input type="reset" value="Reset" class="btn">


            
        </form></td></tr>
    </table>



    <?php 
    if (isset($_POST["name"]) && 
    isset($_POST["radio"]) && 
    isset($_POST["textarea"]) && 
    isset($_POST["province"]) && 
    isset($_POST["event"])
    ){ 
        //get value and assign for variable
        $name=htmlspecialchars($_POST["name"]);
        $status=htmlspecialchars($_POST["radio"]);
        $text=htmlspecialchars($_POST["textarea"]);
        $province=htmlspecialchars($_POST["province"]);

        $event=$_POST["event"];


        //print output

        echo "<h2> Dear $status $name ($text,$province )</h2>" ."<br>"; 
        echo "<h3>We are happy to welcome you to the following events :</h3>"."<br>";
        echo "<ul>";
        foreach($event as $events){
            echo "<li>$events</li>";
        }
        echo "</ul>";

    }
    else{
        echo "your Form Are Not submitted";
    }
    
    
    ?>
</body>
</html>