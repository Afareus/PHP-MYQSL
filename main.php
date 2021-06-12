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
        echo "<h1>Article Name</h1> 
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus at neque magnam fugiat minima nobis culpa, tempore praesentium corrupti eum harum rerum, esse ullam explicabo nisi alias hic cumque numquam quaerat ab. Quia quam temporibus atque magnam aliquid rerum minus illum laboriosam.
            </p>
            <p>
            Dicta aut voluptatibus aliquam earum hic nostrum doloremque, optio sed accusamus quia unde deserunt. Aliquam earum qui alias. Officia laudantium rerum quam, libero tempora alias quod veniam voluptatum repudiandae fugit earum optio voluptate qui iste! Ex qui ratione exercitationem asperiores ullam aut odit quae, quisquam molestiae officia ea dignissimos iure dicta consectetur, facilis eaque modi dolore, minima praesentium laudantium vel dolorum. 
            </p>
            <p>
            Praesentium laboriosam veniam temporibus repellat sapiente explicabo alias aliquid accusantium qui iste exercitationem delectus molestiae velit voluptatum suscipit, eligendi perferendis eaque corporis cumque perspiciatis inventore quibusdam! Exercitationem iusto amet facere dolores ratione optio quibusdam modi, officiis eos totam accusamus, ea sint voluptates pariatur natus ducimus nobis impedit? Consequuntur itaque molestiae quasi reiciendis nisi.
            </p>
            ";
        echo "
            <div class='container'>
                <span class='bold down'>Enter comment: </span>
                <form action='main.php' method='POST'>
                    <input type='hidden' name='prezdivka' value='" . $_SESSION['uzivatel'] . "'> <br>
                    E-mail: &nbsp;<input type='email' name='email'> <br>
                    Comment: <br>
                    <textarea name='text' cols='40' rows='5'></textarea> <br>
                    <input type='submit'>
                </form>
            </div>
            ";

        //------------------------------------------------------------------------------------------------------------------------------------------





    echo "<div class='komenty'>";
        
    
            // ------------------------------ connect to database --------------------------------
    
            if (!($con = mysqli_connect("sql5.webzdarma.cz:3306","gabrielkovac8598","Samsungg$1","gabrielkovac8598")))           
            {                                                                     
                die("Unable to connect to database server !</div></body></html>");
            }
            mysqli_query($con,"SET NAMES 'utf8'");    
            
            // ------------------------------- list comments from database ----------------------------------
    
            if (!($vysledek = mysqli_query($con, "SELECT prezdivka, email, text, id FROM reakce1")))    
            {
                die("Unable to execute query.</body></html>");
            }
    
            while ($radek = mysqli_fetch_array($vysledek))  {   
                $id = $radek["id"];                                                  
                echo "<div class='prispevek'>";
                if ($radek["prezdivka"] == $_SESSION["uzivatel"]) {
                    echo"    <form action='main.php' method='POST'>  
                            <input type='hidden' name='id_smaz' value='$id'>
                            <input class='smazat' type='submit' value='X' title='Delete'>
                            </form>";
                }
                echo "<p><span class='bold'>            
                    ". htmlspecialchars($radek["prezdivka"]) . "</span> <br>". htmlspecialchars($radek["email"]) . "<br> <br>";
                echo htmlspecialchars($radek["text"]) . "</p></div>";
            }
            mysqli_free_result($vysledek);
    
            // ------------------------------------- removing comments ------------------------------------
    
            if (isset($_POST["id_smaz"])) {
                $cislo = $_POST["id_smaz"];
                if (($vysledek = mysqli_query($con, "DELETE FROM reakce1 WHERE reakce1.id = $cislo")))   {
                    echo '<script>alert("successfully deleted")</script>';
                    echo "<meta http-equiv='refresh' content='0'>";
                }
                else {
                    die("Unable to execute query.</body></html>");
                }
            }
            
        
            // ------------------------------------ adding comments ----------------------------------
    
            if (isset($_POST["prezdivka"]) && isset($_POST["email"]) && isset($_POST["text"])) {      
                if (!$_POST["prezdivka"] || !$_POST["email"] ||!$_POST["text"]) {
                    echo '<script>alert("Email and comment must be entered!")</script>';
                }
                else {
    
                    if (mysqli_query($con,                                                
                        "INSERT INTO reakce1(prezdivka, email, text) VALUES('" .            
                        addslashes($_POST["prezdivka"]) . "', '" . 
                        addslashes($_POST["email"]) . "', '" . 
                        addslashes($_POST["text"]) . "')"
                        ))
                    {
                        echo "<meta http-equiv='refresh' content='0'>";
                    }
                    else
                    {
                    echo "Unable to execute query. " . mysqli_error($con);
                    }
                }
            }
    
            mysqli_close($con);
    
    
        
    echo "</div>";





        //------------------------------------------------------------------------------------------------------------------------------------------

    }
    else {
        echo menu();
        die("<div class='center'>You are not logged in!  &nbsp;&nbsp;&nbsp;<a href='logIn.php'>Log In</a> </div><body></html>");
    }
}
else {
    echo menu();
    die("<div class='center'>You are not logged in!  &nbsp;&nbsp;&nbsp;<a href='logIn.php'>Log In</a> </div><body></html>");
}

?> 



</body>
</html>