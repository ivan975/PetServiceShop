<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = isValidCredentials($username, $password);
        if ($result) {
            $loggedInUser = fetch($username, $password);
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: ../View/Homepage.php");
        } else {
            $message = "Login failed!";
        }
    }

function read()
{
    $filename = '../Model/userInfo.json';
    $f = fopen($filename, 'r');
    $fsize = filesize($filename);
    $data = array();
    if ($fsize > 0) {
        $fread = fread($f, $fsize);
        $data = json_decode($fread);
    }
    fclose($fo);
    return $data;
}

function isValidCredentials($username, $password)
{
    $found = false;
    $users = read();
    if (count($users) > 0) {
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]->username === $username and $users[$i]->password === $password) {
                $found = true;
                break;
            }
        }
    }
    return $found;
}

function fetch($username, $password)
{
    $users = read();
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]->username === $username and $users[$i]->password === $password) {
            return $users[$i];
        }
    }
    return array();
}?>
