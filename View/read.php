<?php  

include "../Model/dbconnection.php";

$sql = "SELECT * FROM crud ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);
?>