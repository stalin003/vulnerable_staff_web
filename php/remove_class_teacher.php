<?php

include 'init.php';

$obj = new base_class();


if(isset($_POST['rm_id']))
{
    $rm_id = $_POST['rm_id'];
    
    $obj->normal_query("delete from class_teacher where id =?",array($rm_id));
}


?>