<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Practice</title>
</head>
<body>
    <h1>This page is dedicated to Practice php and mysql</h1>

    <h2>ODD/EVEN:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="Number">Write a number:</label>
        <input type="text" name="Number" placeholder="0" required>
        <br>
        <input type="submit" name="return" value="return">
    </form>
    
    <!--Result-->
    <?php
        if(isset($_POST["return"])){

        $number = $_POST["Number"];
        
            if($number % 2 == 0){
                echo "your number is EVEN";
            }
            else{
                echo "Your number is ODD";
            }
        }
    ?>  
    <br>
    
    <h2></h2>
    <h2></h2>
    <h2></h2>

</body>
</html>