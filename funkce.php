<?php
function menu(): string
{
  return '<ul class="menu">' .
    '<a href="index.php"><li>For all</li></a>' .
    '<a href="main.php"><li>For registered</li></a>' .
    '<a href="logIn.php"><li>Log In</li></a>' .
    '<a href="signIn.php"><li>Sign In</li></a>' .
    '<a href="logOut.php"><li>Sign Out</li></a>' .
    '</ul>';
}

function menu2(): string
{
  return '<ul class="menu">' .
    '<a href="index.php"><li>For all</li></a>' .
    '<a href="main.php"><li>For registered</li></a>' .
    '<a href="logOut.php"><li>Sign Out</li></a>' .
    '</ul>';
}




?>