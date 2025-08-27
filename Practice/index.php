<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvpbYQb-w2J93QpT_Q_r7uIEWLHqIgG1hpwA&s">
    <title>Login form</title>
</head>
<body>
    <h1>This is the LOGIN form</h1>
    <form action="login.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>