<?php

session_start();

if (isset($_POST['submit'])){
    	$data = file_get_contents('data.json');
        $data_array = json_decode($data, true);
        
    
        if (isset($_POST['submit'])) {
        	$username=$_POST['username'];
        	$pass=$_POST['password'];
        	foreach ($data_array as $key => $value) {
        		if($value['username']==$username)
        		{
        			if($value['password']==$pass)
        			{
	    				 $_SESSION['username']=$value['username'];
	    				 setcookie('username', $value['username'], time() + (86400 * 5), "/");
	               		 header("Location:adminDash.php"); 
        			}
        		}
        	}
        	
        }
		
    }
    ?>