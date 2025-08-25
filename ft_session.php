<?php
/* Session: is a super global variable used to store information on a user
to be used across multiple pages. A user is assigned a session-id;
ex. login-credentials*/

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is the login page <br>
    <a href="index.php">this goes to the home âge</a><br>

    <form action="ft_session.php" method="post">
        <label for="username">username: </label>
        <input type="text" name="username"><br>
        <label for="password">password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";
            header("location: ex_session_logout.php");
        }
        else{
            echo "missing";
        }
    }
    
?>