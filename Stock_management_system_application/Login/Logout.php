<?php
session_start();
if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['type']);
        
        header("location:..\Login\Login.php");
        
    }
else
header("location:..\Login\Login.php");
?>