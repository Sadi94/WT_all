<?php 
    require_once "Controller/LoginController.php";
    require_once "Cntroller/RegistrationController.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="styles/myStyle.css">
    </head>
    <body>
        <div class=""></div>
        <div class="login-div" align="center">
            <table>
                <tr>
                <td colspan="2" align="center"><img src="Storage/Registration.png" alt="Logo" width="50%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Registration Form</h1></td>
                </tr>
            </table>
            <form action="" onsubmit="return validate()" method="POST">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="Enter Name" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_name;?></span><span id="err_name"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="uname" id="username" value="<?php echo $uname;?>" onfocusout="checkUsername(this)" placeholder="Enter Username" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_uname;?></span><span id="err_username"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="pass" id="password" value="<?php echo $pass;?>" placeholder="Enter Password" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_pass;?></span><span id="err_password"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="confirm_pass" id="conpassword" value="<?php echo $confirm_pass;?>" placeholder="Confirm Password" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_confirm_pass;?></span><span id="err_conpassword"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="Enter Email" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_email;?></span><span id="err_email"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="phone" id="phoneno" value="<?php echo $number;?>" placeholder="Enter Phone Number" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_number;?></span><span id="err_phoneno"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="register" id="" value="Register" onclick="formSubmission()" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            <a href="login.php">Already Registered? Login</a><br>
            <a href="index.php">Go To HOME</a>
            </form>
        </div>
    </body>
    <script src="JavaScript/RegistrationController.js"></script>
    <div class="footer"></div>
</html>