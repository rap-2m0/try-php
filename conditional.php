<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="conditional.php" method="post">
        <label>Name: </label>
        <input type="text" name="user"><br>
        <label>Password: </label>
        <input type="password" name="pass"><br>
        <input type="submit" value="Log in">
    </form>

    
</body>
</html>

<?php

$user = $_POST ["user"];

    if($user == "rap")
        {
            echo"hi $user";
        }        
    ?>
