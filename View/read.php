<?php  

include "../Model/dbconnection.php";

$sql = "SELECT * FROM user ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>