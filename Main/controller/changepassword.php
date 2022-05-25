<?php include("welcome.php");
$passErr = "";
$pass = $retypePassword = "";

// $ccrntPass ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();


$ccrntPass = $_SESSION['password'];
$newPass = ($_POST['Npass']);
$retypePass = ($_POST["Rpass"]);

if (empty($_POST["Npass"]) & empty($_POST["Rpass"])) {
    $passErr = "Password is required";
}
elseif($ccrntPass == $newPass){
    $passErr = "New Password should not be same as the Current Password";
}
elseif($newPass != $retypePass ){
    $passErr = ". New Password must match with the Retyped Password";
}
else {
    $pass = test_input($_POST["Npass"]);
    // $re = '/^[a-zA-Z0-9_]{8,}\d*$/';
    $re = '/^(?!.* )(?=.*[^a-zA-Z0-9]).{8,}$/m';
    // check if name only contains letters and whitespace
    if (!preg_match($re, $pass, $matches)) {
        $passErr = "Password must not be less than eight (8) characters
        . Password must contain at least one of the special characters (@, #, $,
        %)
        ";
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