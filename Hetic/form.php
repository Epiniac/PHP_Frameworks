<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>
<body>
    <!---
    <form action="connect.php" method="GET">
        Ecrire une phrase : <input type="text" name="phrase"><br>
        Combien de fois ? : <input type="number"  name="nfois"'><br>
        <input type="submit">
    </form>
    --->
    <form action="connect.php" method="post">
        <input type="text" name="id" placeholder="Identifiant">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion">
    </form>
</body>
</html>