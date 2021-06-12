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

$con = mysqli_connect("sql5.webzdarma.cz:3306","gabrielkovac8598","Samsungg$1","gabrielkovac8598");
if (!$con)
{
	die("<div class='center'>Nelze se připojit do databáze</div><body></html>");
}

mysqli_query($con,"SET NAMES 'utf8'");

if(!empty($_POST["jmeno"]) && !empty($_POST["prijmeni"]) && !empty($_POST["prezdivka"]) && !empty($_POST["heslo"]) && !empty($_POST["heslo2"])) {

    if ($_POST["heslo"] == $_POST["heslo2"]) {

        if (mysqli_query($con,                                                
        "INSERT INTO uzivatele(jmeno, prijmeni, prezdivka, heslo) VALUES('" .            
        addslashes($_POST["jmeno"]) . "', '" . 
        addslashes($_POST["prijmeni"]) . "', '" . 
        addslashes($_POST["prezdivka"]) . "', '" . 
        addslashes($_POST["heslo"]) . "')"
        ))
        {
            $_SESSION["uzivatel"] = $_POST["prezdivka"];
            echo "<div class='center'>Registration was successful! &nbsp;&nbsp;&nbsp;<a href='main.php'>Section for registered</a></div>";

        }
        else
        {
            echo "<div class='center'>Unable to register!" . mysqli_error($con) . "</div>";
        }

    }
    else {
        echo "<div class='center'>Passwords do not match! &nbsp;&nbsp;&nbsp;<a href='signIn.php'>Back</a></div>";
    }

}
else {
    echo "<div class='center'>First name, Last name, Nickname or Password cannot be empty!  &nbsp;&nbsp;&nbsp;<a href='signIn.php'>Back</a></div>";
}

mysqli_close($con);




?>
    
</body>
</html>