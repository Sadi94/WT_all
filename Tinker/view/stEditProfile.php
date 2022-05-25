<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Store Owner Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/storeOwner/storeOwner.css">
</head>

<body>
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="">
                    <img src="../src/t.png" alt="">
                </a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="Home.php">Home</a>
                    </li>
                    <li>
                        <a href="storeDashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a  href="stAddNewProduct.php">Add Product</a>
                    </li>
                    <li>
                        <a href="stProfile.php">Profile</a>
                    </li>
                    <li>
                        <a class="selected_nav" href="stEditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="stChangePass.php">Change Password</a>
                    </li>
                    <li>
                        <a href="logout.php">Log Out</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section>
        <legend align="center">
            <h1>Store Editor</h1>
        </legend>
        <span>
            <p> </p>
        </span>
        </fieldset>
    </section>

    <section>
        <fieldset style="margin-top: 3rem;">
            <legend align="center">
                <span>
                    <h1>Add the information to Update your store</h1>
                </span>
            </legend>
            <div class="product_add_box">
                    <form class="form_input" action="">
                        <div class="item_box">
                            <label for="productCategory">Store Category</label>
                            <select id="productCategory" name="productCategory">
                                <option value="1">Select Store Category</option>
                                <option value="2">Groery & Spice</option>
                                <option value="3">Meat and Chicken</option>
                                <option value="4">Vegitables</option>
                            </select>
                        </div>

                        <div class="item_box">
                            <label>Store Name</label>
                            <input type="text" id="sname" name="sname" placeholder="Enter Store Name">
                        </div>

                        <div class="item_box">
                            <label>Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter Email">
                        </div>

                        <div class="item_box">
                            <label>Address</label>
                            <input type="text" id="address" name="address" placeholder="Enter Address">
                        </div>

                        <div class="item_box">
                            <label for="fname">Office Location</label>
                            <input type="text" id="officeLocation" name="officeLocation" placeholder="Enter Office Location">
                        </div>

                        <div class="item_box">
                            <label for="fname">Phone Number</label>
                            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number">
                        </div>

                        <div class="item_box">
                            <label for="fname">Hot Line</label>
                            <input type="text" id="hotLine" name="hotLine" placeholder="Enter Hot Line Number">
                        </div>

                        <div class="item_box">
                            <label for="fname">Logo</label>
                            <input type="file" id="myFile" name="filename">
                        </div>

                        <div>
                        <input type="submit" name="submit" value="Submit" echo $Updated Successfully;
                        </div>
                    </form>
                </div>
        </fieldset>
    </section>

    <?php include "../include/footer.php" ?>
</body>

</html>