<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location:adlogin.php"); // Redirecting To Home Page
}
?>