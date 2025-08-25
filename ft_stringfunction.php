<?php
//string functions:

    $username = "Bro";
    $phone = "123-456-7890";

    $username = strtolower($username);
    echo $username . "<br>";
    
    $username = strtoupper($username);
    echo $username . "<br>";

    $username = trim($username);
    echo $username . "<br>";

    $username = str_pad($username, 20, "code");
    echo $username . "<br>";

    $phone = str_replace("-", "", $phone);
    echo $phone . "<br>";

    $username = strrev($username);
    echo $username . "<br>";

    $username = str_shuffle($username);
    echo $username . "<br>";

    $equals = strcmp($username, "BRO Code");
    echo $username . "<br>";

    $count = strlen($username);
    echo $count . "<br>";

    $phone = "112312-50";
    $index = strpos($phone, "-");
    echo $index . "<br>";

    $username = "bro code";
    $first = substr($username, 0, 3);
    echo $first . "<br>";

    $fullname = explode(" ", $username);  //into array:
    foreach($fullname as $name){
        echo $name . "<br>";
    };

    $username = array("bro", "the", "code"); //array to string:
    $username = implode("-", $username);
    echo $username . "<br>";
?>