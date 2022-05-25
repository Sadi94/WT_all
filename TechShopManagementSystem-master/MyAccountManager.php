<?php 
    include_once "ManagerHeader.php";

    session_start();
    if(!isset($_SESSION["user"])){
      header("Location: Login.php");
    }

    require_once "Controller/ManagerAccountController.php";
    checkUser();
?>

<head>
  <script src="JavaScript/RegistrationController.js"></script>
  <link rel="stylesheet" href="Styles/manager.css">
</head>
<div class="login-div">
    <table>
        <tr>
            <td colspan="2" align="center"><img src="Storage/ChangeInformation.png" alt="Logo" width="30%"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Change Information</h1></td>
        </tr>
    </table>
    <form action="" method="POST">
        <table align="center" id="maml">
            <tr>
                <td colspan="2">Name: <input type="text" name="name" value="<?php echo $_SESSION["name"];?>" placeholder="Enter Name" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_name;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Username: <input type="text" name="uname" value="<?php echo $_SESSION["user"];?>" onfocusout="checkUsername(this)" placeholder="Enter Username" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_uname;?></span></span><span id="err_username"></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">E-mail: <input type="text" name="email" value="<?php echo $_SESSION["email"];?>" placeholder="Enter Email" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_email;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Phone: <input type="text" name="phone" value="<?php echo $_SESSION["phoneNo"];?>" placeholder="Enter Phone Number" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_phone;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="updateDetails" value="Update" class="btn btn-mine"></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>

<div class="login-div">
    <table>
        <tr>
            <td colspan="2" align="center"><img src="Storage/ChangePassword.png" alt="Logo" width="30%"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Change Password</h1></td>
        </tr>
    </table>
    
    
    <form action="" method="POST">
        <table align="center">
            <tr>
                <td colspan="2"><input type="password" name="newPass" placeholder="New Password">
                <br><span class="err-msg"><?php echo $err_newPass;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="conNewPass" placeholder="Confirm New Password">
                <br><span class="err-msg"><?php echo $err_conNewPass;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="changePassword" value="Change Password" class="btn btn-mine"></td>
            </tr>
        </table>
    </form>
</div>

<br><br><br><br><br><br><br><br><br><br><br>


<?php
  include_once "ManagerFooter.php";
?>