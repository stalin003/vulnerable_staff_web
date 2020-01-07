<?php

include 'init.php';

$obj = new base_class();

$id="";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['id']))
    {
//        $id = strip_tags($_POST['id']);
//        $id = stripcslashes($id);
        
        $id = $obj->security($_POST['id']);
    }
    
}

//$sql = "select * from staff_profile where id='$id'";

$obj->normal_query("select * from staff_profile where id=?", array($id));


if($obj->count_rows() > 0)
{
    echo "*id already exists!";
}
elseif($id < 0)
{
    echo "*negative values are not acceptable!";
}

?>
