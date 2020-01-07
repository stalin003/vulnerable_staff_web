<?php

include 'init.php';

$obj = new base_class();

if(!empty($_POST['roll_number']) && !empty($_POST['cname']) && !empty($_POST['campus-selection']))
{
    $roll_no = $_POST['roll_number'];
    $cname = $obj->security($_POST['cname']);
    $salary = $obj->security($_POST['salary']);
    $position = "";
    $campus_selection = $_POST['campus-selection'];
    
    if($obj->normal_query("insert into placement(company_name,salary,student_id,position,campus) values(?,?,?,?,?)", array($cname, $salary, $roll_no, $position, $campus_selection)))
    {
        echo json_encode(array("status" => "success"));
    }
    else
    {
        echo json_encode(array("status" => "Invalid Entry"));
    }
}
else
{
    echo json_encode(array("status" => "plz fill the field"));
}


?>