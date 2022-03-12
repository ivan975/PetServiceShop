<?php
session_start();
function isUserLoggedIn(){
    if(!isset($_COOKIE['username']) && !isset($_COOKIE['userpassword'])){
        if(!isset($_SESSION['username'])&& !isset($_SESSION['userpassword'])){
            return false;
        }
        else{
            return true;
        }
    }
    else{
        $userName = $_COOKIE['username'];
        $password = $_COOKIE['password'];
        $_SESSION['username'] = $userName;
        $_SESSION['password'] = $password;
        
        return true;
    }
}
?>