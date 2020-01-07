<?php

include 'init.php';

$obj = new base_class();

if(isset($_POST['paper_id']))
{
    $id = $_POST['paper_id'];
    
    $obj->normal_query("delete from question_paper where id = ?", array($id));

}


?>