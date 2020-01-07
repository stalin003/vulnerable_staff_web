<?php

include 'init.php';

$obj = new base_class();

if(isset($_POST['select-insertion']))
{
    $select_insertion = $_POST['select-insertion'];
    
    
    if($select_insertion == "teacher")
    {
        if(isset($_POST['class']) && isset($_POST['teacher_id']))
        {
            $class = $_POST['class'];
            $teacher = $_POST['teacher_id'];
            
            $obj->normal_query("insert into class_teacher(class_id,staff_id)values(?,?)",array($class, $teacher));
        }
        
        
    }
    
    if($select_insertion == "mentor")
    {
        if(isset($_POST['class_m']) && isset($_POST['student-start']) && isset($_POST['student-end']) && isset($_POST['teacher']))
        {
            $class_m = $_POST['class_m'];
            $from_std_id = $_POST['student-start'];
            $to_std_id = $_POST['student-end'];
            $teacher = $_POST['teacher'];
            
            for($i=$from_std_id; $i<=$to_std_id; $i++)
            {
                $obj->normal_query("insert into mentoring(student_id, staff_id) values(?,?)",array($i,$teacher));
            }
        }
    }
    
}


?>