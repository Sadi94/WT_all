

     <?php include("dashboardheader.php") 
     
     ?>

     
 <div>
 <?php echo '<link href="style.css" rel="stylesheet" type="text/css" />'; ?>
<div class="userMessage-part">

<div class="all-users">
<?php   
                          $data = file_get_contents("data.json");  

                          $data = json_decode($data, true);  
                
                          foreach($data as $row)  
                          {  
                               echo  '<div class="userprofile-row">'. '<h2>'. '<a href="sendmessage.php">' . $row["name"]. '</a>' . '</h2>' . '</div>';
                               
                               
                               
                          }  
                          ?>
    <!-- <fieldset> -->
       <!-- <h1>HEy</h1> -->
        <!-- </fieldset> -->
</div>

</div>
</div>


