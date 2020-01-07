<?php

include 'init.php';


$obj = new base_class();



if(!empty($_POST['cur_pass']) && !empty($_POST['new_pass']) && !empty($_POST['con_pass']))
{
    $cur_pass = $_POST['cur_pass'];
    $new_pass = $_POST['new_pass'];
    $con_pass = $_POST['con_pass'];
    
    $user_name = $_SESSION['staff_user_name'];
    
    $obj->normal_query("select password from login where username = ?", array($user_name));
    
    $result = $obj->single_result();
    
    $user_pass = $result->password;
    
    if(password_verify($cur_pass, $user_pass))
    {
        if(strlen($new_pass) > 6 && preg_match("/^[a-zA-Z0-9@!#%\s*()_-]*$/",$new_pass))
        {
            if($new_pass == $con_pass)
            {
                $new_password = password_hash($new_pass, PASSWORD_DEFAULT);
                
                if($obj->normal_query("update login set password = ? where username = ?", array($new_password, $user_name)))
                {
                    
                    echo json_encode(array("status" => "success"));
                }
            }
            else
            {
                echo json_encode(array("status" => "password not matched"));
            }
        }
        else
        {
            echo json_encode(array("status" => "password should consist more than 6 letters with special characters like !@#$*()_-"));
        }
    }
    else
    {
        echo json_encode(array("status" => "wrong password"));
    }
    
    
}
else
{
    echo json_encode(array("status" => "plz fill the field"));
}

?>