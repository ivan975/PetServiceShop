<?php
require '../Controller/loginAction.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Pet Service Shop</title>
</head>
<body style="background-color: #daf9ff">

<div style="text-align: -webkit-center">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <fieldset style="width: fit-content">
            <legend>Login:</legend>

            <br><br>

            <table>
                <tr>
                    <td>
                        <label for="username">Username<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <label for="username">:</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username"
                               value="<?php if (isset($username)) echo $username; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center">
                        <span style="color: red"><?php if (isset($usernameErr)) {
                                echo $usernameErr;
                            } ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <label for="password">:</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password"
                               value="<?php if (isset($password)) echo $password; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center">
                        <span style="color: red"><?php if (isset($passwordErr)) {
                                echo $passwordErr;
                            } ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center">
                        <input type="submit" name="login" value="Log In"
                               style="cursor:pointer; background-color: limegreen; float: right;">
                    </td>
                </tr>
            </table>

            <span style="color: red"><?php if (isset($errorMessage)) echo $errorMessage; ?></span>

            <br><br>

        </fieldset>
    </form>



</body>
</html>