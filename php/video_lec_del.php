<?php

include 'init.php';

$obj = new base_class();



if(isset($_POST['id']))
{
    $id = $_POST['id'];
    
//    $sql = "delete from staff_profile where id = '$id'";
    
    if($obj->normal_query("delete from vid_lect where id = ?", array($id)))
    {
        echo json_encode(array("status" => "success"));
    }
    else
    {
        echo json_encode(array("status" => "error"));
    }
}