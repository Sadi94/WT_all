<?php 
    session_start();
    if (!isset($_SESSION["user"]) || !isset($_COOKIE["user"])) {
        header("Location: login.php");
    }
    include_once "ManagerHeader.php";
    require_once "Controller/ProductController.php";
    require_once "Controller/CategoryController.php";
	$categories = getAllCategories();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/myStyle.css">
    <script src="JS/CategoryController.js"></script>
    <title>Add Product</title>
</head>
    <body>
        <div class="login-div" align="center">
            <table>
                <tr>
                    <td colspan="2" align="center"><img src="Storage/AddProduct.png" alt="Logo" width="30%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Add Product</h1></td>
                </tr>
            </table>

        <form action="" method="POST">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="product_name" value="<?php echo $product_name;?>" placeholder="Enter Products Name" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_product_name;?></span></td>
                    <td></td>
                </tr>
<!--Category Selection-->
                <tr>
                    <td colspan="2"><select name="product_category" class="form-control">Category:
				                                <option selected disabled>Choose Category</option>
				                                        <?php
					                                        foreach($categories as $category){
						                                    echo "<option value='".$category["category_name"]."'>".$category["category_name"]."</option>";
					                                        }
				                                        ?>
			                                    </select>
			                    <?php echo $err_product_category;?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="product_price" value="<?php echo $product_price;?>" placeholder="Enter Price" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_product_price;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="product_quantity" value="<?php echo $product_quantity;?>" placeholder="Quantity" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_product_quantity;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="product_description" value="<?php echo $product_description;?>" placeholder="Description" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_product_description;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="AddProduct" id="" value="Add Product" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
    <br><br><br><br>
<?php
    include_once "ManagerFooter.php";
?>
</html>