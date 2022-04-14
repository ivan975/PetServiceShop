<?php
    $firstName=$lastName=$email=$username=$password=$confirmpassword='';
    $firstNameError=$lastNameError=$emailError=$emailFormatError=$usernameError=$passwordError=$passwordMatchError=$confirmpasswordError='';

    if(isset($_POST["btnClick"]))  {  
        if(isset($_POST["firstname"])){
            $firstName = $_POST["firstname"];
        }
        if(isset($_POST["lastname"])){
            $lastName = $_POST["lastname"];
        }
        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }
        if(isset($_POST["username"])){
            $username = $_POST["username"];
        }
        if(isset($_POST["password"])){
            $password = $_POST["password"];
        }
        if(isset($_POST["confirmpassword"])){
            $confirmpassword = $_POST["confirmpassword"];
        }
        // if there are erros
        // if(empty($_POST["firstname"]))  
        // {   
        //    $firstNameError ="<label>Firsr name Required</label>";
        // }

        // if(empty($_POST["lastname"]))  
        // {  
        //     $lastNameError ="<label>last name required</label>";
        // }

        // if (empty($_POST["email"])) 
        // {
        //     $emailError ="<label>Email Required</label>";
        // } 
        // else 
        // {   
        //     $email= $_POST['email'];
        //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        //     {
        //         $emailFormatError ="<label>Invalid email format</label>";
        //     }
        // }
        // if(empty($_POST["username"]))  
        // {  
        //     $usernameError ="<label>Username Required</label>"; 
        // }
        // if(empty($_POST["password"]))  
        // {  
        //     $passwordError ="<label>Password Required</label>"; 
        // }
        
        // if(empty($_POST["confirmpassword"]))  
        // {  
        //     $confirmpasswordError ="<label>Confirm Password Required</label>";  
        // } 
        // else if($_POST["password"] != $_POST["confirmpassword"]) 
        // {
        //     $passwordMatchError ="<label>Password does not match</label>";
        // }
        else{
        //     if(file_exists("userInfo.json")){ 
        //         $current_data = file_get_contents('userInfo.json');
        //         $tempJSONdata = json_decode($current_data, true);
                
        //         $formdata = array(
        //                 'username'      =>        $_POST["username"],
        //                 'password'      =>        $_POST["password"]
        //             );
        //             $tempJSONdata[] = $formdata;
        //             $final_data = json_encode($tempJSONdata);

        //             // file_put_contents('../../Model/userInfo.json', json_encode($tempJSONdata));
                    
        //             if(file_put_contents("userInfo.json", $final_data))
        //             {
        //                 $message = "<i>Registration Data Saved Successfully</i>";
        //             } 
        //             else
        //             {
        //                 $message = "<i>No Data Saved!, Try Again</i>";
        //             }
        //     }  
        //     else  
        //     {  
        //         $message = "JSON file does not exist";  
        $servername = "localhost";
        $userName = "root";
        $passwordd="";
        $dbname = "petshop";
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $conn = new mysqli($servername,$userName,$passwordd,$dbname);

        if($conn->connect_error){
            die("Connection Failed:".$conn->connect_error);
        }
        else{
            $sql = "INSERT INTO registration (FirstName,LastName,Email,Username,Password,ConfirmPassword) VALUES ('".$firstName."','".$lastName."','".$email."','".$username."','".$password."','".$confirmpassword."')";
            $result = $conn->query($sql);
            }
        }
    }
?>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="../View/css/registration.css">
    </head>
    <body>
    <div class="container">
			<form action="registration.php" method="POST">
				<h1>Registration</h1>
				<input type="text" name="firstname" placeholder="First Name">
				<input type="text" name="lastname" placeholder="Last Name">
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="confirmpassword" placeholder="Confirm Password">
				<input type="submit" name="btnClick" value="Sign Up">	
	</div>
    </body>
</html>