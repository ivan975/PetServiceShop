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
        $dbname = "petShop";
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
    <body style="background-color:#90EE90">
        <h1 style="text-align:center">Create Account</h1>
        <!-- <div style="width:500px">     -->
        <table>
        <form onsubmit= "return validate()"action="#" method="post">
                    <tr>
                    <td><label for="FirstName">First Name:</label></td>
                    <td><input type="text" name="firstname" id="firstname"value="<?php echo $firstName; ?>"><br><br></td>
                        </tr>
                        <tr>
                        <td><label for="LastName">Last Name:</label></td>
                        <td><input type="text &nbsp" name="lastname" id="lastname"value="<?php echo $lastName;?>"><br><br></td>
                        
                        </tr>

                       <tr>
                       <td><label for="Email">Email:</label></td>
                       <td><input type="email" name="email" id="email"value="<?php echo $username;?>&nbsp"><br><br></td>
                       
                       </tr>
                        <tr>
                            <td> <label for="Username">Username:</label></td>
                            <td><input type="text" name="username" id="username" value="<?php echo $confirmpassword; ?>"><br><br></td>
                        
                        </tr>
                        <tr>
                        <td><label for="Password">Password:</label></td>
                        <td><input type="password" name="password" id="password"value="<?php echo $password; ?>"><br><br></td>
                        
                        </tr>
                        <tr>
                        <td><label for="ConfirmPassword">Confirm Password:</label></td>
                         <td><input type="password" name="confirmpassword" id="confirmpassword" value="<?php echo $confirmpassword; ?>"><br><br></td>
                         
                        </tr>

                       <tr>
                      <td><input type="submit" value="Submit" name="btnClick"></td>
                       </tr>
                       </form>
        </table>
                       <!--   -->
          </body>
</html>