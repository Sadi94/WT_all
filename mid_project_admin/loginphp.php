<?php

session_start();

if (isset($_POST['submit'])){
    	$data = file_get_contents('da.json');
        $data_array = json_decode($data, true);
        
    
        if (isset($_POST['submit'])) {
        	$email=$_POST['email'];
        	$pass=$_POST['password'];
        	foreach ($data_array as $key => $value) {
        		if($value['email']==$email)
        		{
        			if($value['password']==$pass)
        			{
	    				 $_SESSION['username']=$value['email'];
	    				 setcookie('uname', $value['email'], time() + (86400 * 5), "/");
	               		 header("Location:userdata.php"); 
        			}
        		}
        	}
        	
        }
		
    }
    ?>