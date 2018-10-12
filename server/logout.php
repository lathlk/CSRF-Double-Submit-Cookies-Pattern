<?php

if(isset($_COOKIE['session_id']) or isset($_COOKIE['username'])){
    // Empty cookie values  and set Expiration time to past
    setcookie('session_id', '', time() - (86400 * 30), "/");
    setcookie('username', '', time() - (86400 * 30), "/");
    setcookie('csrf_token', '', time() - (86400 * 30), "/");
}
header("location: ../index.php");
?>