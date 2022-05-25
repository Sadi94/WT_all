<?php 
$nameErr = $userErr = $passErr =  $emailErr = $genderErr = $dateofbirthErr =   "";
$name = $email = $gender = $userName = $date = $month = $year = $pass = "";

 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();


    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
        else{
            $_SESSION['name'] = $name;
        }
    }
    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    } else {
        $pass = test_input($_POST["pass"]);
        // $re = '/^[a-zA-Z0-9_]{8,}\d*$/';
        $re = '/^(?!.* )(?=.*[^a-zA-Z0-9]).{8,}$/m';
        // check if name only contains letters and whitespace
        if (!preg_match($re, $pass, $matches)) {
            $passErr = "Password must not be less than eight (8) characters
            . Password must contain at least one of the special characters (@, #, $,
            %)
            ";
        }
        else{
            $_SESSION['password'] = $pass;
        }
        
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
        else{
            $_SESSION['email'] = $email;
        }
    }

    if (empty($_POST["username"])) {
        $userErr = "UserName is required";
    } else {
        $userName = test_input($_POST["username"]);
        
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9_]{2,}\d*$/", $userName)) {
            $nameErr = "User Name can contain alpha numeric characters, period, dash or
            underscore only. User Name must contain at least two (2) characters";
        }
        else{
            $_SESSION['user'] = $userName;
        }
    }

    
    if (empty($_POST["date"])) {
        $dateofbirthErr = "Date is required";
    } else {
        $date = test_input($_POST["date"]);
        // ch eck if name only contains letters and whitespace
        if (!preg_match("/^[1-31' ]*$/", $date)) {
            $dateofbirthErr = "Must be valid numbers
            (dd: 1-31, mm: 1-12,
            yyyy: 1953-1998)";
        }
        
    }
    if (empty($_POST["month"])) {
        $dateofbirthErr = "Month is required";
    } else {
        $month = test_input($_POST["month"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[1-12' ]*$/", $month)) {
            $dateofbirthErr = "Must be valid numbers
            (dd: 1-31, mm: 1-12,
            yyyy: 1953-1998)";
        }
    }
    if (empty($_POST["year"])) {
        $dateofbirthErr = "Year is required";
    } else {
        $year = test_input($_POST["year"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^(195[3-9]|19[6-8][0-9]|199[0-8])$/", $year)) {
            $dateofbirthErr = "Must be valid numbers
            (dd: 1-31, mm: 1-12,
            yyyy: 1953-1998)";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "At least one of them
    must be selected";
    } else {
        $gender = test_input($_POST["gender"]);
        $_SESSION["gender"] = $gender;
    }

    $message = "";
    if(file_exists('data.json'))  
        {  
             $current_data = file_get_contents('data.json');  
             $array_data = json_decode($current_data, true);  
             $input = array(  
                  'name'               =>     $_POST['name'],  
                  'e-mail'          =>     $_POST["email"],  
                  'username'     =>     $_POST["username"],  
                  'gender'     =>     $_POST["gender"],  
                  'pass'     =>     $_POST["pass"],
                  
              );  
             $array_data[] = $input;  
             $final_data = json_encode($array_data);  
             if(file_put_contents('data.json', $final_data))  
             {  
                  $message = "<label class='text-success'>File store Success fully</p>";  
             }  
        }  
        else  
        {  
             $error = 'JSON File not exits';  
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