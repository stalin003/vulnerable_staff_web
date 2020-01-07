<?php

include 'init.php';

$obj = new base_class();

if(isset($_POST['id']))
{
    
    $id = $_POST['id'];
    
    $obj->normal_query("delete from industrial_visit where id = ?", array($id));
}



?>