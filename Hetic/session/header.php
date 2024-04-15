<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<style>
    nav{
        background-color: blueviolet;
        display: flex;
        justify-content: space-around;
        margin: 0 0;
        padding: 25px;
    }

    a{
        color: white;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: larger;
    }
    
</style>
<body>
    <nav>
        <a href="accueil.php">Lobby</a>
        <a href="about.php">About</a>
        <?php if (!empty($_SESSION['username'])) : ?>
            <a href="deconnexion.php">Log out</a>
        <?php else : ?>
            <a href="connexion.php">Log in</a>
        <?php endif; ?>
    </nav>
</body>
</html>