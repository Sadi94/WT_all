<?php
    $search="";
    $err_search="";
    $has_error=false;

    if(isset($_POST["search"]))
    {
        if(empty($_POST["search"])){
            $err_search="**enter category**";
            $has_error=true;
        }else{
            $search=htmlspecialchars($_POST["search"]);
        }
    }
?>
