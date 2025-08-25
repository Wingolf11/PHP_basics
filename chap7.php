<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width", initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="chap7.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username"><br>
        <lagel for="age">Age: </lagel>
        <input type="text" name="age"><br>
        <label for="email">Email: </label>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php

//To prevent sql injection or malicious script inside our input we can use: sanitize or validate
    
    //This is sanitize:
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "Hello $username <br>";
        echo "your age is $age <br>";
        echo "your email is $email <br>";
    }

    //This is validation:
    if(isset($_POST["login"])){

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);


        if(empty($age) || empty($email)){
            echo "not valid";
        }
        else{
            echo "this is your age: $age";
        }
    }


/*include: copies the content of a file (php/html/text) and includes it in your php file.
it becomes reusable.*/
    /*-> <?php include("file path"); ?>*/
?>