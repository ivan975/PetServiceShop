<?php 

if (isset($_POST['create'])) {
	include "../Model/dbconnection.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);

	$user_data = 'name='.$name. '&email='.$email;

       $sql = "INSERT INTO crud(name, email) VALUES('$name', '$email')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../View/read.php?success=successfully created");
       }else {
          header("Location: ../View/userprofile.php?error=unknown error occurred&$user_data");
       }
}