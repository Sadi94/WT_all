<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: Login.php");
    }
    include_once "HeaderUser.php";
?>
        <div class="main-content">
            <h2>My Account</h2>
            <span><a href="EditAccount.php">Edit Account</a></span><br>
            <span><a href="ChangePassword.php">Change Password</a></span><br>
            <span><a href="#">Update Address</a></span><br>
            <span><a href="#">Build PC</a></span><br>
            <span><a href="affiliate.php">Add Affiliate Account</a></span><br>
        </div>
        <div class="main-content">
            <h2>My Orders</h2>
            <span><a href="#">View Order History</a></span><br>
            <span><a href="#">View Wishlist</a></span><br>
            <span><a href="#">View Reward Points</a></span><br>
            <span><a href="#">View Return Request</a></span><br>
            <span><a href="#">Your Transactions</a></span><br>
            <span><a href="#">Recurring Payments</a></span><br>
        </div>
        <?php
        include_once "footer.php";
        ?>