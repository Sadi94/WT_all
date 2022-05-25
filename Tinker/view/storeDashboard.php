<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Store Owner Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/storeOwner/storeOwner.css">

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
                        <a class="selected_nav" href="storeDashboard.php">Dashboard</a>
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
            <h1> Welcome Dashboard</h1>
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
                    <h1>Available Products on your Store Right now</h1>
                </span>
            </legend>
            <div class="product_box">
                <div class="list_page_box">
                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/v1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Potato</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$25tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$20tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/v2.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Brinjal</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$40tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$30tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/c1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Chicken</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$300tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$250tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/m1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Meat</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$750tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$550tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/s2.png" alt="Product Photo">
                        </div>
                        <p class="p_name">Organic Spices</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$200tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$100tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/s1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Organic Spices</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$200tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$100tk</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="product_box">
                <div class="list_page_box">
                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/v1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Potato</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$25tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$20tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/v2.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Brinjal</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$40tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$30tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/c1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Chicken</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$300tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$250tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/m1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Meat</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$750tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$550tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/s2.png" alt="Product Photo">
                        </div>
                        <p class="p_name">Organic Spices</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$200tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$100tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/s1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Organic Spices</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$200tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$100tk</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="product_box">
                <div class="list_page_box">
                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/v1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Potato</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$25tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$20tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/v2.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Brinjal</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$40tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$30tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/c1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Chicken</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$300tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$250tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/m1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Fresh Meat</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$750tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$550tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/s2.png" alt="Product Photo">
                        </div>
                        <p class="p_name">Organic Spices</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$200tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$100tk</span>
                        </p>
                    </div>

                    <div class="product_main_box">
                        <p class="modal_link">
                            <a href="#ex1" rel="modal:open">Edit</a>
                        </p>
                        <div class="product_img">
                            <img src="../src/product/s1.jpg" alt="Product Photo">
                        </div>
                        <p class="p_name">Organic Spices</p>
                        <p class="p_price">
                            <span title="Regular Price">
                                <del>$200tk</del>
                            </span>
                            <span title="Sale Price" class="s_price">$100tk</span>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>

    <?php include "../include/footer.php" ?>

    <!-- Modal body -->
    <div id="ex1" class="modal">
        <p>Edit Product</p>
        <div class="product_add_box">
            <form class="form_input_modal form" action="">
                <div class="item_box form-control">
                    <label for="productCategory">Product Category</label>
                    <select id="productCategory" name="productCategory">
                        <option value="1">Select Product Category</option>
                        <option value="2">Groery & Spice</option>
                        <option value="3">Meat and Chicken</option>
                        <option value="4">Vegitables</option>
                    </select>
                </div>

                <div class="item_box form-control">
                    <label for="fname">Product Name</label>
                    <input type="text" id="pname" name="pname" placeholder="Enter Product Name">
                </div>

                <div class="item_box form-control">
                    <label for="fname">Regular Price</label>
                    <input type="number" id="relarPrice" name="relarPrice" placeholder="Enter Regular Price">
                </div>

                <div class="item_box form-control">
                    <label for="fname">Sales Price</label>
                    <input type="number" id="sPrice" name="sPrice" placeholder="Enter Sales Price">
                </div>

                <div class="item_box form-control">
                    <label for="fname">Stock Quantit</label>
                    <input type="number" id="pname" name="pname" placeholder="Enter Quantity">
                </div>

                <div class="item_box form-control">
                    <label for="fname">Photo</label>
                    <input type="file" id="myFile" name="filename">
                </div>

                <div>
                    <button>Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>