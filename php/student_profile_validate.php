<?php

include 'init.php';

$obj = new base_class();


if(isset($_POST['id']))
{
    $id = $obj->security($_POST['id']);
    
    
    $obj->normal_query("select * from student where roll_no = ?", array($id));
        
    
    if($obj->count_rows() > 0)
    {
        echo "*id already exists!";
    }
    elseif($id < 0)
    {
        echo "*negative values are not acceptable!";
    }
}

?>