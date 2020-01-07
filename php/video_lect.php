<?php

include 'init.php';

$obj = new base_class();

if(!empty($_POST['title']) && !empty($_POST['embed-txt']))
{
    $title = $obj->security($_POST['title']);
    
    $emb_txt = $_POST['embed-txt'];
    
    if($obj->normal_query("insert into vid_lect(title, embed_txt)value(?,?)", array($title, $emb_txt)))
    {
        echo json_encode(array("status" => "success"));
    }
    else
    {
        echo json_encode(array("status" => "error"));
    }
    
}
else
{
    echo json_encode(array("status"  => "Plz fill the field"));
}


?>