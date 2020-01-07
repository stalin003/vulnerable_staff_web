<?php

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

$login_staff_session = "staff";

if(empty($_SESSION['login']))
{
    header('Location: /MCA_staff_web/');
    die();
    
}
?>


