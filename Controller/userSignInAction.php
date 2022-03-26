<?php
        // include '../Model/user.php';
        // $userName = getUserName();
        // $userPassword = getUserPassword();
                $servername = "localhost";
                $userName = "root";
                $passwordd = "";
                $dbname = "petShop";
                $username = $_POST["username"];
                $password = $_POST["password"];
                $conn = new mysqli($servername,$userName,$passwordd,$dbname);

                if($conn->connect_error){
                    die("Connection failed:".$conn->connect_error);
                }
                else{
                    $sql = "SELECT * FROM  registration where username='".$username."'and password='".$password."'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0){
                        echo "Logged in successfully...";
                        header("Location: ../View/Homepage.php");
                    }
                    else{
                        echo "Invalid username or password";
                    }
                }
                if($_POST['username'] == $username && $_POST['password'] == $password) {
                    //    echo $_POST['username'];
                        if(isset($_POST['remember'])) {
                            setcookie('username', $_POST['username'], time() + (86400 * 30), "/");
                            setcookie('userpassword', $_POST['password'], time() + (86400 * 30), "/");
                        }
                        else {
                            setcookie('username', $_POST['username'], time() - 3600, "/");
                            setcookie('userpassword', $_POST['password'], time() - 3600, "/");
                        }
                    }
                // }
                    // session_start();
                    //    if($_POST['username'] == $userName && $_POST['password'] == $userPassword){
                    //     $_SESSION['username'] = $_POST['username'];
                    //     $_SESSION['userpassword'] = $_POST['password'];
                    //     header("Location: ../View/Homepage.php");
?>