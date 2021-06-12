<?php
include "funkce.php";
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

<h1>Sign In</h1>

<form class="register_form" action="script_signIn.php" method="POST">
    <label for="jmeno">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
    <input type="text" name="jmeno" id=""><br>
    <label for="prijmeni">Surname: &nbsp;&nbsp;</label>
    <input type="text" name="prijmeni" id=""><br>
    <label for="prezdivka">Nickname: &nbsp;</label>
    <input type="prezdivka" name="prezdivka" id=""><br>
    <label for="heslo">Password: &nbsp;</label>
    <input type="password" name="heslo" id=""><br>
    <label for="heslo2">Password: &nbsp;</label>
    <input type="password" name="heslo2" id=""><br>
    <input type="submit" name="" id="" value="Submit">
</form>


</body>
</html>