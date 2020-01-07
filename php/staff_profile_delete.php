<?php

include 'init.php';

$obj = new base_class();

$id="";

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    
//    $sql = "delete from staff_profile where id = '$id'";
    
    if($obj->normal_query("delete from staff_profile where id = ?", array($id)))
    {
        echo json_encode(array('status' => 'profile deleted!'));
    }
    else
    {
        echo json_encode(array('status' => 'error in deleting profile'));
    }
}

?>