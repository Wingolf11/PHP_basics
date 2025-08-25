<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username</label><br>
        <input type="text" name="username"><br>
        <label>password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>


<?php
//this is the reason there is a warning: cant see the variables for useer name and ppassword cause no value has been given to either of them!

    $name = "Bro <br>";
    echo $name;

    echo "hello {$name}";

    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
    /*
    We have seen arithmetics & variables:
        For variables: boolean, floats, int and char
            - $varaible_name = *the variable*
            - for arithmetics: + - *   for exponents(**) and module (%).
     => Continue at get & post!!  (35min)*/
?>

