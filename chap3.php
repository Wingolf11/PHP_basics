

<?php
//If statements:
    $age = 0;

    if ($age >= 18){
        echo "yes";
    }
    elseif($age == 0){  //can add multipme elsif statements!
        echo "zero";
    }
    else{
        echo "no";
    }


//Logical operators: && / || / !.
    $temp = 25;

    if ($temp >= 0 && $temp <= 30){
        echo "yes";
    }
    // if($item == 0 ||$item == 20) ...
    // if(!$item).... or if($item)...
    
    
//Switch:

    $grade = "a";

    switch($grade){
        case "a":
            echo "great";
            break;
        case "b":
            echo "good";
            break;
        case "c":
            echo "okay";
            break;
        default:
            echo "default";
            break;
    }

//LOOPS:
    //fpr loops:
    for($item = 10; $item > 0; $item-=2){
        echo $item . "<br>";
    }

    //while(condition, same syntax)

//Array: "variable" wich can hold more than one value at the time.

    $foods = array("apple", "orange", "hola");

    //$foods[0] = "pineapple";
    //array_push($foods, "pineapple"); adds as last element in array.
    //array_pop($foods); removes last element for array.
    //array_shift($foods); removes first element from array and shifts averything to the left by one place.
    //$reversed = array_reverse($foods); reverses the array elements. must assign to a variable.

    foreach($foods as $food){
        echo $food . "<br>";
    }
    
//Assosiative arrays: array made of key value pairs
    $capitals = array("USA" => "Washington D.C",
                    "Japan" => "Kyoto",
                    "South Korea" => "Seoul",
                    "India" => "New Delhi");
    echo $capitals["Japan"];

    //Add a key => value:
    $capitals["China"] = "Baijing";
    //Remove last value:
    array_pop($capitals);
    //Removes the first pair from the array:
    array_shift($capitals);
    //make a new array:
    $keys = array_keys($capitals);
    //Switch the key - values places:
    $capitals = array_flip($capitals);
    //reverse order of array:
    $capitals = array_reverse($capitals);
    //count pairs:
    echo count($capitals);

    foreach($keys as $key){
        echo "$key <br>";
    }

    foreach ($capitals as $key => $value) {
    echo "$key = $value<br>";
    }
?>