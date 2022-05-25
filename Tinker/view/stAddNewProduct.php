<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Store Owner Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/storeOwner/storeOwner.css">
    <script src='../jsc/addProductValidation.js'></script>
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
                        <a class="selected_nav" href="stAddNewProduct.php">Add Product</a>
                    </li>
                    <li>
                        <a href="stProfile.php">Profile</a>
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
            <h1>Add new product</h1>
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
                    <h1>Enter the product ddetails to add</h1>
                </span>
            </legend>
            <div class="product_add_box">
                <form class="form_input form" id="form">
                    <div class="form-control item_box">
                        <label for="productCategory">Product Category</label>
                        <select id="productCategory" name="productCategory">
                            <option value="1">Select Product Category</option>
                            <option value="2">Groery & Spice</option>
                            <option value="3">Meat and Chicken</option>
                            <option value="4">Vegitables</option>
                        </select>
                    </div>

                    <div class="form-control item_box">
                        <label for="fname">Product Name</label>
                        <input type="text" id="productName" name="pname" placeholder="Enter Product Name">
                        <small>Error Message</small>
                    </div>

                    <div class="form-control item_box">
                        <label for="fname">Regular Price</label>
                        <input type="number" id="regularPrice" name="relarPrice" placeholder="Enter Regular Price">
                        <small>Error Message</small>
                    </div>

                    <div class="form-control item_box">
                        <label for="fname">Sales Price</label>
                        <input type="number" id="salsePrice" name="sPrice" placeholder="Enter Sales Price">
                        <small>Error Message</small>
                    </div>

                    <div class="form-control item_box">
                        <label for="fname">Stock Quantit</label>
                        <input type="number" id="stockQuantity" name="sQuantity" placeholder="Enter Quantity">
                        <small>Error Message</small>
                    </div>

                    <div class="form-control item_box">
                        <label for="fname">Photo</label>
                        <input type="file" id="myFile" name="filename">
                        <small>Error Message</small>
                    </div>

                    <div>
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </fieldset>
    </section>

    <script>
        const form = document.getElementById('form');
        const productName = document.getElementById('productName');
        const regularPrice = document.getElementById('regularPrice');
        const sPrice = document.getElementById('salsePrice');
        const sQuantity = document.getElementById('stockQuantity');

        function showError(input, message) {
            const formControl = input.parentElement;
            formControl.className = 'form-control error';
            const small = formControl.querySelector('small');
            small.innerText = message;
        }

        function showSucces(input) {
            const formControl = input.parentElement;
            formControl.className = 'form-control success';
        }


        //checkRequired fields
        function checkRequired(inputArr) {
            inputArr.forEach(function(input) {
                if (input.value.trim() === '') {
                    showError(input, `${getFieldName(input)} is required`)
                } else {
                    showSucces(input);
                }
            });
        }


        //check input Length
        function checkLength(input, min, max) {
            if (input.value.length < min) {
                showError(input, `${getFieldName(input)} must be at least ${min} characters`);
            } else if (input.value.length > max) {
                showError(input, `${getFieldName(input)} must be les than ${max} characters`);
            } else {
                showSucces(input);
            }
        }

        //get FieldName
        function getFieldName(input) {
            return input.id.charAt(0).toUpperCase() + input.id.slice(1);
        }

        window.onload = function() {
            //Event Listeners
            form.addEventListener('submit', function(e) {
                e.preventDefault();


                checkRequired([productName, regularPrice, sPrice, sQuantity]);
                checkLength(sQuantity, 0, 10000);
                checkLength(regularPrice, 1, 250000);
                checkLength(sPrice, 1, 250000);

            });

        };
    </script>

    <?php include "../include/footer.php" ?>
</body>

</html>