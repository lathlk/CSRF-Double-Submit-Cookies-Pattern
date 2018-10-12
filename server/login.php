<?php

$users = include './database/users.txt';

if($_POST['username'] == "" or $_POST['password'] == "" or $_POST['username'] == NULL or $_POST['password'] == NULL){
    header("location: ../client/index.php?error=Username or Password feilds cannot be empty.");
}else{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($users[$username] === $password){
        // Generate session id and csrf token
        $session_id = uniqid();            
        $csrf_token = uniqid() . $session_id;

        // set session_id, csrf_token and username(this is optional and used for saving votes) cookies
        setcookie('session_id', $session_id, time() + (86400 * 30), "/");
        setcookie('csrf_token', $csrf_token, time() + (86400 * 30), "/");
        setcookie('username', $username, time() + (86400 * 30), "/");
        
        header("location: ../home.php");
    }else{
        header("location: ../index.php?error=Invalid username or password! Please check the credentials and try again!");
    }
}
?>