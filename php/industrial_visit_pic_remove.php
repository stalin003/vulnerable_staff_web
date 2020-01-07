<?php

include 'init.php';

$obj = new base_class();

if(isset($_POST['id']))
{
    $id = $_POST[id];
    
    $obj->normal_query("delete from industrial_visit_pics where id = ?", array($id));
}

?>