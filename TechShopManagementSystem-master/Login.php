<?php
    require_once "Controller/LoginController.php";
    include_once "Header.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="styles/myStyle.css">
        <script src="LoginController.js"></script>
    </head>
    <body>
        <div class="login-div" align="center">
            <table>
                <tr>
                    <td colspan="2" align="center"><img src="Storage/LoginIcon.png" alt="Logo" width="50%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Login Form</h1></td>
                </tr>
            </table>
            <form action="" method="POST" onsubmit="return validate()">
                <table align="center">
                    <tr>
                        <td colspan="2"><input type="text" name="uname" id="uname" value="<?php echo $uname;?>" placeholder="Username" class="my-font my-textfield">
                        <br><span class="err-msg" id="err_uname"><?php echo $err_uname;?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="pass" pass="pass" value="<?php echo $pass;?>" placeholder="Password" class="my-font my-textfield">
                        <br><span class="err-msg" id="err_pass"><?php echo $err_pass;?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="login" value="Login" class="btn-mine"></td>
                        <td></td>
                    </tr>
                </table>
                <a href="">Forgot Password</a><br>
                <a href="registration.php">Not Registered? Register</a><br>
                <a href="homepage(common).php">Go To HOME</a>
            </form>
        </div>
    </body>
    <br><br><br><br>
    <div class="footer"></div>
</html>


        