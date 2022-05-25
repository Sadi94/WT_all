<?php
$messageErr = "";
$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // session_start();
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
        // check if name only contains letters and whitespace
        
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