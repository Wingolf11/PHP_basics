<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="chap5.php" method="post">
        <label for="number">Enter number: </label>
        <input type="text" name="number" id="number"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>



<?php
// Functions: write some code once and reuse.

    function happybith($name){
        echo "happy $name! <br>";
    }

    function is_even($number){
        $check = $number % 2;
        if($check == 0){
            echo "$number is even";
            return $check;
        }
        else{
            echo "$number is odd";
        }
    }
    if(isset($_POST["submit"])){
        happybith("sponge");
        is_even($_POST["number"]);
    }
?>