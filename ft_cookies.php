<?php
/*cookie: information about a user stored in a user's web browser. 
Used for targeted ads, browsing preferences and others*/

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");

    if(isset($_COOKIE["fav_food"])){
        echo "you fav food is {$_COOKIE["fav_food"]} <br>";
    }
    else{
        echo "idk <br>";
    }

?>