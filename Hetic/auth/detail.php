<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-image: url('./assets/background.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: azure;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        header {
            background-color: rgba(255, 255, 255, 0.11);
            border-radius: 15px;
            color: #fff;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img.logo {
            height: 55px;
            width: auto;
            margin-right: 10px;
        }

        header nav {
            display: inline-block;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
</style>
<body>
<header>
        <div class="logo-background">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Logo_HETIC.png/1200px-Logo_HETIC.png">
        </div>
        <div class="header-content">
            <nav>
                <a href='accueil.php'>Home</a>
                <a href='detail.php'>About</a>
                <!-- Navigation content -->
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    echo "
                    <a href='logout.php'>Déconnexion</a>
                    ";
                } else {
                    echo "      
                    <a href='login.php'>Connexion</a>
                    ";
                }
                ?>
            </nav>
        </div>
    </header>

    
</body>
<script>
    _img = document.createElement("img");
    _img.style.position = 'absolute';
    _img.style.margin = '0';
    _img.style.zIndex = '1000';
    _img.onload = function() {
    document.body.insertBefore(_img, document.body.firstChild);
    setInterval(function(){
        document.getElementById('char1').style.left = Math.floor(Math.random() * (window.innerWidth - _img.width))+'px';
        document.getElementById('char1').style.top = Math.floor(Math.random() * (window.innerHeight - _img.height))+'px';
        var randomRot = (-45+Math.floor((Math.random()*90)));
        document.getElementById('char1').style.transform = 'rotate('+randomRot+'deg)';
        document.getElementById('char1').style.webkitTransform = 'rotate('+randomRot+'deg)';

    }, 1500);
    }
    _img.id = "char1";
    /* you can use whatever image you like */
    _img.src = "https://i.imgur.com/FmXCDNG.gif";
</script>
</html>