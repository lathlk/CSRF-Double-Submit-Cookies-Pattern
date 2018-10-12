<?php
    $votes = include './database/votes.txt';

    if(!isset($_POST["vote"])){
        header("location: ../home.php?error=Please Select your VOTE !");
    }else{
        if(!isset($_COOKIE['session_id']) or !isset($_COOKIE['csrf_token']) or !isset($_COOKIE['username'])) {
            header("location: ../login.php");
        } else {
            if(!isset($_POST["csrf_token"])){
                header("location: ../home.php?error=Failed! Please login and try again!");
            }else{
                // Validate the csrf token cookie and the csrf_token submitted along with the form
                if($_COOKIE['csrf_token'] == $_POST["csrf_token"]){
                    $votes[$_COOKIE['username']] = $_POST["vote"];
                    file_put_contents('./database/votes.txt',  '<?php return ' . var_export($votes, true) . ';');
                    header("location: ../home.php?success=Your vote was succuessfully saved !");
                }else{
                    header("location: ../home.php?error=Failed! Please login and try again!");
                }
            }
        }
    }
?>