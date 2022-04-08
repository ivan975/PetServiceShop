<?php
    // require'../Controller/loginAction.php';
?>
<html>
    <body>
        <link rel="stylesheet" href="../View/css/login.css">
    <div class="container">
             <div class="upper">
				<h3>Login</h3>
			    </div>
    <form action="../Controller/userSignInAction.php" method="POST">
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