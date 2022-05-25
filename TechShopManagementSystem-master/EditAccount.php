<?php 
    include_once "HeaderUser.php";
    if(!isset($_SESSION["user"]))
    {
        header("Location: index.php");
    }
    require_once "Controller/RegistrationController.php";
    require_once "Controller/LoginController.php";
    checkUser();
?>
<head>
    <script src="JS/RegistrationController.js"></script>
</head>
<div class="main-content">
    <form action="" method="POST">
        <table align="center">
            <tr>
                <td colspan="2"><input  type="text" name="name" value="<?php echo $_SESSION["name"];?>" placeholder="Enter Name" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_name;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="uname" value="<?php echo $_SESSION["user"];?>" onfocusout="checkUsername(this)" placeholder="Enter Username" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_uname;?></span></span><span id="err_username"></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="email" value="<?php echo $_SESSION["email"];?>" placeholder="Enter Email" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_email;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="phone" value="<?php echo $_SESSION["phoneNo"];?>" placeholder="Enter Phone Number" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_number;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="updateDetails" id="" value="UPDATE" class="btn-mine"></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>
<?php
    include_once "footer.php";
?>