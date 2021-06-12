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

if (isset($_SESSION["uzivatel"])){
    if ($_SESSION["uzivatel"]) {
        echo menu2();
        echo "<div class='user'>User: <span class='bold'>" . $_SESSION['uzivatel'] . "</span></div>";

    }
    else {
        echo menu();
    }
}
else {
    echo menu();
}

?> 

<h1>Some Title</h1> 
<p>
Praesentium laboriosam veniam temporibus repellat sapiente explicabo alias aliquid accusantium qui iste exercitationem delectus molestiae velit voluptatum suscipit, eligendi perferendis eaque corporis cumque perspiciatis inventore quibusdam! Exercitationem iusto amet facere dolores ratione optio quibusdam modi, officiis eos totam accusamus, ea sint voluptates pariatur natus ducimus nobis impedit? Consequuntur itaque molestiae quasi reiciendis nisi.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus at neque magnam fugiat minima nobis culpa, tempore praesentium corrupti eum harum rerum, esse ullam explicabo nisi alias hic cumque numquam quaerat ab. Quia quam temporibus atque magnam aliquid rerum minus illum laboriosam.
</p>

            
    

</body>
</html>