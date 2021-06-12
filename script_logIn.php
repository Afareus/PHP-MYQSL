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

        $prezdivka = addslashes($_POST["prezdivka"]);
        $heslo = addslashes($_POST["heslo"]);

        $con = mysqli_connect("sql5.webzdarma.cz:3306","gabrielkovac8598","Samsungg$1","gabrielkovac8598");
        if (!$con)
        {
            die("<div class='center'>Unable to connect to database!</div><body></html>");
        }

        mysqli_query($con,"SET NAMES 'utf8'");

        $platny = mysqli_query($con, "SELECT id, prezdivka, heslo FROM uzivatele WHERE prezdivka='$prezdivka' AND heslo='$heslo'");
        $uzivatel = mysqli_fetch_array($platny);
        

        if ($uzivatel)
        {
	        $_SESSION["uzivatel"] = $prezdivka;
            echo "<div class='center'>Login successful.  &nbsp;&nbsp;&nbsp;<a href='main.php'>Section for registered</a></div>";
        }
        else {
            die("<div class='center'>You have entered an incorrect Nickname or Password! &nbsp;&nbsp;&nbsp;<a href='logIn.php'>Back</a></div></body></html>");
        }
        
        


    ?>

</body>
</html>