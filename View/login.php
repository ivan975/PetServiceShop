<?php
    // require'../Controller/loginAction.php';
?>
<html>
    <head>
        <title>Login</title>
		<link rel="stylesheet" href="../View/css/login.css">
    </head>
<body>
    <div class="container">
			<form action="../Controller/userSignInAction.php" method="POST">
				<h1>Login</h1>
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" name="btnSignup" value="Login">	
	</div>
</html>