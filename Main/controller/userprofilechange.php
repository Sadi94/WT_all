<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $message = "";
    if(file_exists('data.json'))  
        {  
             $current_data = file_get_contents('data.json');  
             $array_data = json_decode($current_data, true);  
             $input = array(  
                  'name'               =>     $_POST['name'],  
                  'e-mail'          =>     $_POST["email"],  
                   
                //   'gender'     =>     $_POST["gender"],  
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


?>
