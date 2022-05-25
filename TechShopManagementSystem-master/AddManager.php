<?php
    require_once "AdminHeader.php";
    require_once "Controller/ManagerController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/myStyle.css">
    <script src="JS/EmployeeController.js"></script>
    <title>Add Manager</title>
</head>
    <body>
        <div class="login-div2" align="center">
            <table>
                <tr>
                    <td colspan="2" align="center"><img src="Storage/AddEmployee.png" alt="Logo" width="30%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: San -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 20px">Add Manager</h1></td>
                </tr>
            </table>

        <form action="" method="POST" onsubmit="return validate()">
            <table align="center">
                <!-- Name -->
                <tr>
                    <td colspan="2"><input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="Enter Name" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_name"><?php echo $err_name;?></span></td>
                    <td></td>
                </tr>
                <!-- Username -->
                <tr>
                    <td colspan="2"><input type="text" name="uname" id="uname" value="<?php echo $uname;?>" placeholder="Enter Username" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_uname"><?php echo $err_uname;?></span></td>
                    <td></td>
                </tr>
                <!--Mail -->
                <tr>
                    <td colspan="2"><input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="Enter Email" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_email"><?php echo $err_email;?></span></td>
                    <td></td>
                </tr>
                <!--Contact -->
                <tr>
                    <td colspan="2"><input type="text" name="phone" id="phone" value="<?php echo $number;?>" placeholder="Enter Phone Number" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_phone"><?php echo $err_number;?></span></td>
                    <td></td>
                </tr>
                <!--Pass, Conn -->
                <tr>
                    <td colspan="2"><input type="password" name="pass" id="pass" value="<?php echo $pass;?>" placeholder="Enter Password" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_pass"><?php echo $err_pass;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="confirm_pass" id="confirm_pass" value="<?php echo $confirm_pass;?>" placeholder="Confirm Password" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_confirm_pass"><?php echo $err_confirm_pass;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="AddManager" id="" value="Add Manager" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
    <br><br><br><br>
<?php
    include_once "AdminFooter.php";
?>
</html>