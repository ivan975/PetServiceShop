<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petshop";
    
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    else{
        $sql = "select * from registration";
        $result=$conn->query($sql);
        $output='<table border="1" width=100%> <tr><th>ID</th> <th>Firstname</th><th>Lastname</th><th>Email</th><th>Username</th><th>Password</th></tr>';
	    if($result->num_rows>0)
	    {
		    while($row=$result->fetch_assoc())
		    {
			    $output.='<tr><td>'.$row["ID"].'</td><td>'.$row["firstname"].'</td><td>'.$row["lastname"].'</td></tr>'.$row["email"].'</td><td>'.$row["username"].'</td><td>'.$row["password"].'</td><td>';
		    }
		    $output.='</table>';
		    echo $output;
	    }
	else{
        echo "No data";
    }
}
?>