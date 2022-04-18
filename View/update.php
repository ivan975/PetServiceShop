<?php 

if (isset($_GET['id'])) {
	include "../Model/dbconnection.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ID = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE ID=$ID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: ../View/read.php");
    }


}else if(isset($_POST['update'])){
    include "../Model/dbconnection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../View/update.php?id=$id&error=Name is required");
	}else if (empty($email)) {
		header("Location: ../View/update.php?id=$id&error=Email is required");
	}else {

       $sql = "UPDATE users
               SET name='$name', email='$email'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../View/read.php?success=successfully updated");
       }else {
          header("Location: ../View/update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: ../View/read.php");
}