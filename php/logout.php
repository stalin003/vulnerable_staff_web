<?php
session_start();

if(isset($_POST['logout']))
{
    $_SESSION['login']="";
    header('Location: /MCA_staff_web/');
    session_destroy();
    die();
    
}

?>
