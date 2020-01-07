<?php

include 'init.php';

$obj = new base_class();

$new_password = password_hash("loyola",PASSWORD_DEFAULT);
$user_name = "admin";

if($obj->normal_query("update login set password = ? where username = ?", array($new_password, $user_name)))
{

    echo json_encode(array("status" => "success"));
}

?>