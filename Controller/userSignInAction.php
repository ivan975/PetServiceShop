<?php
        include '../Model/user.php';
        $userName = getUserName();
        $userPassword = getUserPassword();
        
        if($_POST['username'] == $userName && $_POST['password'] == $userPassword) {
        //    echo $_POST['username'];
            if(isset($_POST['remember'])) {
                setcookie('username', $_POST['username'], time() + (86400 * 30), "/");
                setcookie('userpassword', $_POST['password'], time() + (86400 * 30), "/");
            }
            else {
                setcookie('username', $_POST['username'], time() - 3600, "/");
                setcookie('userpassword', $_POST['password'], time() - 3600, "/");
            }
            session_start();
           if($_POST['username'] == $userName && $_POST['password'] == $userPassword){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['userpassword'] = $_POST['password'];
            header("Location: ../View/Homepage.php");
           }
        }
        // else {
        //     header("Location:../View/login.php?login=false");
        // }
?>