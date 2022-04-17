<html>
    <head>
        <title>Login</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="../View/css/Login.css">
    </head>
<body>
   		 <div class="container">
			<form  action="../Controller/userSignInAction.php" method="post" id='form'>
				<h1>Login</h1>
						<input type="text" name="username" id="username" placeholder="Username">
						<input type="password" name="password" id="password" placeholder="Password">
					<input type="submit" name="btnSignup" value="Login">
		</div>
	</body>
	<script src="../View/js/validation.js"></script>
</html>