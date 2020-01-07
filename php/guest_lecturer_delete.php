<?php

include 'init.php';

$obj = new base_class();

$id="";

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    
//    $sql = "delete from staff_profile where id = '$id'";
    
    if($obj->normal_query("delete from guest_lecturer where id = ?", array($id)))
    {
        echo 'profile deleted!';
    }
    else
    {
        echo 'error in deleting profile';
    }
}

?>