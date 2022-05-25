<!-- Header(Employee) starts -->
<?php
    session_start();
?>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="Styles/manager.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <header class="header">
            <ul class="plain-bullet">
                <?php
                    if(!isset($_SESSION["user"])){
                        include_once "loggedOutButton.php";
                    }
                    else{
                        include_once "loggedInButton.php";
                    }
                ?>
                <li><a href="homepage(common).php" class="left">HOME</a></li>
                <li>
                    <form method="post">
                    <input type="text" placeholder="Serach" id="search" autocomplete="off">
                    <button class="button">Search</button>
                    <!--
                    <button class="button"><a href="#" class="w3-btn w3-black">Link Button</a></button>
                    <a href="#" class="w3-btn w3-black">Link Button</a> -->
                    <!-- <button class="button">My Account</button> -->
                    </form>
                </li>
            </ul>
        </header>
        <div class="topnav" align="center">
            <ul class="plain-bullet">
                <li><a href="#">LAPTOP</a></li>
                <li><a href="#">DESKTOP</a></li>
                <li><a href="#">ALL IN ONE</a></li>
                <li><a href="#">MONITOR</a></li>
                <li><a href="#">SERVER</a></li>
                <li><a href="#">WORKSTATION</a></li>
                <li><a href="#">PRINTERS</a></li>
                <li><a href="#">PHOTOCOPIER</a></li>
                <li><a href="#">ACCESSORIES</a></li>
                
            </ul>
        </div>
        <!-- Header(user) starts -->

