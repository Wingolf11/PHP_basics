<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ft_math.php" method="post">
        <label>X: </label>
        <input type="text" name="X"> <br>

        <label>Y: </label>
        <input type="text" name="Y"> <br>

        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $X = $_POST["X"];
    $Y = $_POST["Y"];
    $total = null;

    $total = abs($X);
    $round = round($X); //to round until an specific number after the coma just: round($total, 2) for example; until the second number after the coma.
    $floor = floor($X);
    $ceil = ceil($X);
    $power = pow($X, $Y);
    // $min = min($X, $Y);
    // $max = max($X, $Y);
    $pi = pi();
    //random nb: $rand = rand(1, 6);

    echo "{$X} <br>";
    echo "{$total} <br>";
    echo "{$round} <br>";
    echo "{$floor} <br>";
    echo "{$ceil} <br>";
    echo "{$power} <br>";
    echo "{$pi} <br>";

?>