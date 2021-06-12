<?php
include "funkce.php";
session_start();
$_SESSION["uzivatel"] = "";
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

echo "<div class='center'>You have logged out! &nbsp;&nbsp;&nbsp;<a href='logIn.php'>Log In</a></div>";

?> 

</body>
</html>