<?php

include 'init.php';

$obj = new base_class();


$active = 1;

if(isset($_POST['std_class']))
{
    $std_class = $_POST['std_class'];
    
    if($std_class == 'AMCA')
    {
        $obj->normal_query("SELECT roll_no FROM student INNER JOIN student_in_class ON student.roll_no = student_in_class.student_id INNER JOIN class ON student_in_class.class_id = class.id WHERE class.class_name = ? AND student.roll_no NOT IN(SELECT student_id FROM mentoring) AND student.active = ? order by student.roll_no", array($std_class, $active));
    }
    
    if($std_class == 'NMCA')
    {
        $obj->normal_query("SELECT roll_no FROM student INNER JOIN student_in_class ON student.roll_no = student_in_class.student_id INNER JOIN class ON student_in_class.class_id = class.id WHERE class.class_name = ? AND student.roll_no NOT IN(SELECT student_id FROM mentoring) AND student.active = ? order by student.roll_no", array($std_class, $active));;
    }
    
    if($std_class == 'DMCA')
    {
        $obj->normal_query("SELECT roll_no FROM student INNER JOIN student_in_class ON student.roll_no = student_in_class.student_id INNER JOIN class ON student_in_class.class_id = class.id WHERE class.class_name = ? AND student.roll_no NOT IN(SELECT student_id FROM mentoring) AND student.active = ? order by student.roll_no", array($std_class, $active));
    }
    
    if($std_class == 'Select Class')
    {
        echo "";
    }
    
    
    $result = $obj->fetch_all();
    
    foreach($result as $std_list)
    {
        $roll_no = $std_list->roll_no;
        echo "<option>$roll_no</option>";
    }
    
    
    
}



?>



