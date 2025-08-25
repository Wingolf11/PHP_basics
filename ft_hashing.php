<?php
/*hashing: transforms sensitive data like passwords into letter, numbers and/or symbols via
mathematical process */

    $password = "123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    //veyfies the math similarities between the hashed password and the actual one.
    if(password_verify("124", $hash)){
        echo "logged";
    }
    else{
        echo "no";
    }

?>