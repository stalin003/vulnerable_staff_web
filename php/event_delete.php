<?php

include 'init.php';

$obj = new base_class();

if(isset($_POST['id']))
{
    
    $id = $_POST['id'];
    
    $obj->normal_query("delete from college_events where id = ?", array($id));
}



?>