<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validation</title>
</head>
<body>
    <form method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Phone Number :</label>
        <input type="text" name="pnumber" placeholder="Enter phone number">
        <br><br>
        <input type="submit" name="button" value="Check">
    </form>

    <?php 
    if (isset($_POST["button"])) {
        $phone = $_POST["pnumber"];
        
        // Validate phone number format:
        // Accepts (+94)XXXXXXXXX or +94XXXXXXXXX (example: +94771234567)
        if (preg_match("/^(\(\+[0-9]{2}\)|\+[0-9]{2})[0-9]{9}$/", $phone)) {
            echo "✅ Valid Phone Number: $phone";
        } else {
            echo "❌ Invalid Phone Number";
        }
    }
    ?>
</body>
</html>
