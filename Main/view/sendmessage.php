<?php include('../controller/usermessagesending.php'); ?>

<?php include('usermessage.php'); ?>



<div class="userMessage-part">
    <div class="send-message">
        <div class="user-messaging">
            <?php
            echo "<h3>" . $message . "</h3>";
            ?>
        </div>

        <div class="main-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
        <input type="text" name="message">
        <input class="submit-btn" type="submit" value="Send">
        </form>
        </div>

        </div>

</div>
