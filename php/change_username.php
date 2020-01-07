<?php

include 'init.php';

$obj = new base_class();


if(!empty($_POST['new_usr']) && !empty($_POST['cur_pass']))
{
    $user_name = $_SESSION['staff_user_name'];
    $new_username = $_POST['new_usr'];
    $pass = $_POST['cur_pass']; 
    
    if(strlen($new_username) >= 6 && preg_match("/^[a-zA-Z0-9\s]*$/",$new_username))
    {
        $obj->normal_query("select password from login where username = ?", array($user_name));
        
        $result = $obj->single_result();
        
        $user_pass = $result->password;
        
        if(password_verify($pass, $user_pass))
        {
            if($obj->normal_query("update login set username = ? where username = ?", array($new_username, $user_name)))
            {
                $_SESSION['staff_user_name'] = $new_username;
                echo json_encode(array("status" => "success"));
            }
        }
        else
        {
            echo json_encode(array("status" => "Invalid Password"));
        }
    }
    else
    {
        echo json_encode(array("status" => "username should be greater than 6 letter with no special character"));
    }
}
else
{
    echo json_encode(array("status" => "plz fill the field"));
}

?>