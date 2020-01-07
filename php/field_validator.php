<?php


if(!empty($_POST['name']))
{
    $name = $_POST['name'];
    
    if(preg_match("/^[a-zA-Z.\s]*$/", $name))
    {
       echo ""; 
    }
    else
    {
        echo "*Invalid Name";
    }
}
elseif(!empty($_POST['mobile_no']))
{
    $mobile_no = $_POST['mobile_no'];
    if(preg_match("/^[0-9]*$/", $mobile_no))
    {
        if(strlen($mobile_no) != 10)
        {
            echo "*Mobile number should be 10 digits";
        }
        elseif($mobile_no < 0)
        {
            echo "*Negative number are not accepted";
        }
    }
    else
    {
        echo "*Invalid Number";
    }
}
elseif(!empty($_POST['string_validate']))
{
    $string_validate = $_POST['string_validate'];
    
    if(preg_match("/^[a-zA-Z-\s]*$/", $string_validate))
    {
       echo ""; 
    }
    else
    {
        echo "*Invalid";
    }
}
elseif(!empty($_POST['email']))
{
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "";
    }
    else
    {
        echo "*Invalid email</br>";
    }
}



?>






















