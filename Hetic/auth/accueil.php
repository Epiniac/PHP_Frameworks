<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        section {
            float: left;
            width: 65%;
        }

        aside {
            float: right;
            width: 25%;
        }

        aside img {
            width: 300px;
            margin-top: 60px;
        }
    </style>
    <title>HETIC Home</title>
</head>
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
                    <a href='deconnexion.php'>Déconnexion</a>
                    ";
                } else {
                    echo "      
                    <a href='connexion.php'>Connexion</a>
                    ";
                }
                ?>
            </nav>    
        </div>
    </header>
    <main>
        <section>
            <h1>HETIC: A Utopian Web Experience</h1>
            <p>Welcome to a world where nothing is impossible, a place where the boundaries of the physical and the digital converge, creating a harmonious and utopian environment. In this world, we introduce you to HETIC, a perfect blend of technology and aesthetics, where the user's experience reigns supreme.</p>
            <hr>
            <hr>
            <br>
            <h3>The vision</h3>
            <p>At HETIC, we strive to create an environment where the user feels empowered and connected to the world around them. We strive to bring a seamless and interactive experience, where the user can engage with content and understand its depth in an artistic and meaningful manner. Our vision is to create a world where the barriers of reality are blurred, and people are free to explore their surroundings while embracing the power of technology and creativity.</p>
        </section>
        <aside>
            <h2>Jacques Chen</h2>
            <p>A highly skilled and innovative individual who has demonstrated remarkable capabilities in his field. While specifics are not provided in the context, his presence in this showcase highlights his reputation as a pure genius.</p>
            <hr>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Git-logo.svg/1200px-Git-logo.svg.png" alt="">
        </aside>
    </main>
</body>
</html>