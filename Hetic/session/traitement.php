<?php 
    session_start();    

    function validUser($username,$password){
        $users = json_decode(file_get_contents('users.json'),true);
        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return $user;
            }
        }
        return false;
    }

    $log = validUser($_POST['username'],$_POST['password']);

    if (isset($_COOKIE['username'])) {
        setcookie($_POST['username'],$_POST['password'], time() + 60 * 60 * 24 * 30);
        $cookie_value = $_COOKIE['username'];
        if (!empty($_POST['username'])&& !empty($_POST['password'])) {
            if ($log) {
                $_SESSION['username'] = $log["username"];
                $_SESSION['secret'] = $log["secret"];
            }
        }
        else {
            echo 'Invalid username or password';
        }
      }

      header('location: accueil.php');
    exit();