<?php 
    include_once "HeaderUser.php";
    require_once "Controller/ContactUsController.php";
?>

<head>
    <script src="JS/ContactUsController.js"></script>
</head>

        <div class="main-content">
            <form action="" method="post" onsubmit="return validate()" class=>
                <table>
                    <tr>
                        <th><h3>Contact Form</h3></th>
                    </tr>
                    <tr>
                        <td><span>Your Name*</span></td>
                        <td><input type="text" name="name" id="name" placeholder="Your Name"><br>
                        <span class="err-msg"><?php echo $err_name;?></span><span id="err_name"></span></td>
                    </tr>
                    <tr>
                        <td><span>Your Email*</span></td>
                        <td><input type="text" name="email" id="email" placeholder="Your Email"><br>
                        <span class="err-msg"><?php echo $err_email;?></span><span id="err_email"></span></td>
                    </tr>
                    <tr>
                        <td><span>Topic</span></td>
                        <td>
                            <select name="topic" id="topic">
                                <option selected disabled>---Please Select---</option>
                                <option>General Inquiries</option>
                                <option>Pre-sale Inquiries</option>
                                <option>Billing Issues</option>
                                <option>Technical Support</option>
                                <option>Complains</option>
                            </select><br> <span id="err_topic"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Message*</span></td>
                        <td><textarea name="message" id="message" placeholder="Message"></textarea><br>
                        <span class="err-msg"><?php echo $err_message;?></span><span id="err_message"></span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="contact_us" onclick="formSubmission()" value="Submit" ></td>
                    </tr>
                </table>
            </form>
        </div>
<?php
    include_once "footer.php";
?>