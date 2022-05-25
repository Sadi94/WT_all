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
                        <a class="selected_nav" href="stProfile">Profile</a>
                    </li>
                    <li>
                        <a href="stEditProfile.php">Edit Profile</a>
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
            <h1>Store Information</h1>
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
                    <h1>Store Contact Info</h1>
                </span>
            </legend>
            <div class="product_add_box">
                <h3 align="center">

                    <img src="../src/S.jpg" height="200px" width="250px"> </img> <br>
                    <br>
                    Store Category <span style="color: rgb(255, 255, 255);"> </span>: Online Grocery Store
                    <hr>
                    Store Name <span style="color: rgb(255, 255, 255);"> </span>: Sopno
                    <hr>
                    Email <span style="color: rgb(255, 255, 255);"> </span> : sopno@tinker.com
                    <hr>
                    Address <span style="color: rgb(255, 255, 255);"> </span> : Nikunja 02, Dhaka, Bangladesh
                    <hr>
                    Office Location <span style="color: rgb(255, 255, 255);"> </span> : House 02, Road 11, Khilkhet - 1229
                    <hr>
                    Phone <span style="color: rgb(255, 255, 255);"> </span> : +880 1888 121212
                    <hr>
                    Hot_Line<span style="color: rgb(255, 255, 255);"> </span>: 2477
                    <hr>
                    <!-- Date of Birth <span style="color: rgb(255, 255, 255);"> </span>: 19.09.1990 -->
                    <hr>


                    <a tyle="color:SlateBlu;" href="stEditProfile.php">
                        Edit Profile </a>

                </h3>
            </div>
        </fieldset>
    </section>

    <?php include "../include/footer.php" ?>
</body>

</html>