<?php
    // require'../Controller/loginAction.php';
?>
<html>
<head>
    <title>User Login</title>
    <style>
        p.invalid{
            color: red;
        }
    </style>
</head>
<body style="background-color:#90EE90">
    <h1 style="text-align:center">User Login</h1>
    <p class="invalid">
        <?php
           
        ?>
    </p>
    <div class="container">
    <form action="../Controller/userSignInAction.php" method="POST" style="text-align:-webkit-center">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label><br><br>
        <input type="submit" value="login">
        <p>Don’t have an account? <a href="../Model/registration.php">Sign up</a>.</p>
    </form>
    </div>
</body>
</html>