<?php


include 'init.php';

$obj = new base_class();

if(isset($_POST['id']))
{
    $id = $_POST['id'];

    if($obj->normal_query("delete from placement where id = ?", array($id)))
    {
        echo json_encode(array("status" => "success"));
    }
    else
    {
        echo json_encode(array("status" => "unable to delete"));
    }
}

?>