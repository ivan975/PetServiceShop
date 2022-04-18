<?php  

if(isset($_GET['ID'])){
   include "../View/dbconnection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['ID']);

	$sql = "DELETE FROM users
	        WHERE ID=$ID";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ..View/read.php?success=successfully deleted");
   }else {
      header("Location: ..View/read.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ..View/read.php");
}