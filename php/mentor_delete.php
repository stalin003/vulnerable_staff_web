<?php

include 'init.php';

$obj = new base_class();

$start_roll = "_______";
$end_roll = "___";

if(isset($_POST['mentor_rm_id']) && isset($_POST['student_rm_id']))
{
    $mentor_rm_id = $_POST['mentor_rm_id'];
    $student_rm_id = $_POST['student_rm_id'];
    
    $std_rm_id = $start_roll . $student_rm_id . $end_roll;
    
    
    $obj->normal_query("DELETE from mentoring WHERE student_id like ? AND staff_id = ?", array($std_rm_id, $mentor_rm_id));
    
}


?>