<?php 
    include_once "HeaderUser.php";
    if(!isset($_SESSION["user"])){
        header("Location: index.php");
    }
    require_once "Controller/LoginController.php";
    require_once "Controller/RegistrationController.php";
    checkUser();
?>
<div class="main-content">
    <form action="" method="POST">
        <table align="center">
            <tr>
                <td colspan="2"><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Enter Password" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_pass;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="confirm_pass" value="<?php echo $confirm_pass;?>" placeholder="Confirm Password" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_confirm_pass;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="changePass" id="" value="CONTINUE" class="btn-mine"></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>
<?php
    include_once "footer.php";
?>