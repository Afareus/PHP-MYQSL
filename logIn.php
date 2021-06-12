<?php
include "funkce.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Site Name</h1>
</header>


<?php
echo menu();
?> 


<h1></h1>
<form action="script_logIn.php" method="POST">
    <label for="prezdivka">Nickname: </label>
    <input type="prezdivka" name="prezdivka" id=""><br>
    <label for="heslo">Password:  </label>
    <input type="password" name="heslo" id=""><br>
    <input type="submit" name="" id="" value="Log In">
</form>

</body>
</html>