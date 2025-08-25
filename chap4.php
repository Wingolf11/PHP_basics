<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="chapt4.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username"> <br>
        <label for="password">password</label>
        <input type="password" name="password"><br>
        <input type="radio" name="credit" value="visa">
        Visa<br>
        <input type="radio" name="credit" value="mastercard">
        Mastercard<br>
        <input type="radio" name="credit" value="express">
        Express<br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>



<?php
//isset(): returns TRUE if a variable is declared and not null
//empty(): returns TRUE if a variable is not declared, false, null, ""

    if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $card = $_POST["credit"];

        foreach($_POST as $key => $value){
            echo "{$key} = {$value} <br>";
        }
        echo $card . "<br>";
    }
    else{
        echo "pls submit form";
    }
?>