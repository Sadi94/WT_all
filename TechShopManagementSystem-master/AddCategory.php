<?php
    session_start();
    if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: Login.php");
    }
    require_once "ManagerHeader.php";
    require_once "Controller/CategoryController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/myStyle.css">
    <title>Add Category</title>
</head>
    <body>
        <div class="login-div" align="center">

            <table>
                <tr>
                    <td colspan="2" align="center"><img src="Storage/AddCategory.png" alt="Logo" width="30%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Add Category</h1></td>
                </tr>
            </table>

        <form action="" method="POST" onsubmit="return validate()">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="category_name" id="category_name" value="<?php echo $category_name;?>" placeholder="Category Name" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_category_name"><?php echo $err_category_name;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="addCategory" id="" value="Add Category" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
    <div class="footer">
    <?php include_once "ManagerFooter.php";?></div>
</html>


        