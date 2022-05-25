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
                        <a href="stAddNewProduct.php">Add Product</a>
                    </li>
                    <li>
                        <a href="stProfile.php">Profile</a>
                    </li>
                    <li>
                        <a href="stEditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a class="selected_nav" href="stChangePass.php">Change Password</a>
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
            <h1>Change Password</h1>
        </legend>
        <span>
            <p> </p>
        </span>
        </fieldset>
    </section>

    <section>
        <?php
        $currentPassword = $newpassword = $rnewpassword = "";
        $cpasswordError = $npasswordError = $rnpasswordError = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["currentPassword"])) {
                $cpasswordError = "Current password is required!";
            } else {
                $currentPassword = test_input($_POST["currentPassword"]);
                if (strcmp($currentPassword, "abc@1234")) {
                    $cpasswordError = "Incorrent password!";
                }
            }

            if (empty($_POST["newpassword"])) {
                $npasswordError = "New password is required!";
            } else {
                $newpassword = test_input($_POST["newpassword"]);

                if (!strcmp($newpassword, "abc@1234")) {
                    $npasswordError = "Current and New password can't be same!";
                }
            }

            if (empty($_POST["rnewpassword"])) {
                $rnpasswordError = "Retype New Password is required!";
            } else {
                $rnewpassword = test_input($_POST["rnewpassword"]);
                if (strcmp($newpassword, $rnewpassword)) {
                    $rnpasswordError = "Retype password and New Password need to be same!";
                } else {
                    $updated = "Pasword upadated success fully";
                }
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <fieldset style="margin-top: 3rem;">
            <legend align="center">
                <span>
                    <h1>Enter the Current Password to change</h1>
                </span>
            </legend>
            <div class="product_add_box">
                <form class="form_input" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <div class="item_box">
                        <label>Current Password:</label>
                        <input type="password" name="currentPassword" value="<?php echo $currentPassword; ?>">
                        <span class="error"><?php echo $cpasswordError; ?></span>
                    </div>

                    <div class="item_box">
                        <label style="color:green">New Password:</label>
                        <input type="password" name="newpassword" value="<?php echo $newpassword; ?>">
                        <span class="error"><?php echo $npasswordError; ?></span>
                    </div>

                    <div class="item_box">
                        <label style="color:Red">Retype New Password:</label>
                        <input type="password" name="rnewpassword" value="<?php echo $rnewpassword; ?>">
                        <span class="error"><?php echo $rnpasswordError; ?></span>
                    </div>

                    <div>
                        <input type="submit" name="submit" value="Submit">
                    </div>
                    <?php
                    if (isset($updated)) {
                        echo $updated;
                    }
                    ?>
                </form>
            </div>
        </fieldset>
    </section>

    <?php include "../include/footer.php" ?>
</body>

</html>