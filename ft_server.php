<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--htmlspecialchars avoids scripts injection and server sgv set to php self sets the action to its own php file no mather if we change the name later -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username">username: </label>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>


<?php
/*$_Server = Super global vaciable that contains headers, paths and scripts locations.
-> The entries in this array are created by the web server.
-> Shows nearly everything you need to know about the current
web page env.*/
    

    /*foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>";
    }*/
    //safer than just isset...
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "gola";
    }

?>