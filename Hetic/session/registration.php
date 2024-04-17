<?php
$users = json_decode(file_get_contents('users.json'), true);


$username = $_POST['username'];
$secret = $_POST['secret'];
$password = $_POST['password'];

if (!empty($username) && !empty($secret) && !empty($password)) {
    if (!in_array($username, array_column($users, 'username'))) {
      $users[] = ['username' => $username, 'password' => $password];
      file_put_contents('users.json', json_encode($users));
      echo 'Registration successful';
    } else {
      echo 'Username already exists';
    }
  }
