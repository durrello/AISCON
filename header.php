<?php

session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AISCON: Blog</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<header>
<nav>
    <div class="main-wrapper">
<ul>
    <li><a href="index.php">HOME</a></li>
    <div class="nav-login" >
        <?php
            if (isset($_SESSION['u_id'])) {
                echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit" >LOGOUT</button>
            </form>';
            } else {
                    echo ' <form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="username/email" >
                    <input type="password" name="pwd" placeholder="password" >
                    <button type="submit" name="submit" >LOGIN</button>
                    </form>
                    <a href="signup.php">SIGN UP</a>';
            }
        ?>

            
       
    </div>
</ul>
    </div>
</nav>
</header>
