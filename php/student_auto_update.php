<?php

include 'init.php';

$obj = new base_class();

$obj->normal_query("SELECT roll_no, course_year from student WHERE active = ?",array(1));

$result = $obj->fetch_all();

foreach($result as $auto_update_student)
{
    $roll_no = $auto_update_student->roll_no;
    $course_year = $auto_update_student->course_year;
    
    
    $joined_year = substr($roll_no,7,2);
    
    $joined_date = mktime(0,0,0,7,1,$joined_year);
    
    $current_year = date('y');
    
    $current_time = time();
    
    $check_first_year = mktime(0,0,0,7,1,$joined_year+1);
    
    if($joined_year == $current_year)
    {
        if($current_time >= $joined_date && $current_time <= $check_first_year)
        {
            $year = 1;
        }
    }
    if($joined_year < $current_year)
    {
        $years_of_study = array();
        
        for($i = $joined_year; $i< $current_year+1; $i++)
        {
            $years_of_study[$i]= mktime(0,0,0,7,1,$i);
        }
        
        $tmp_year = $joined_year;
        
        
        if(sizeof($years_of_study) > 4)
        {
            $year = "finished";
        }
        else
        {
            
            $year = 0;
            
            for($i = 0; $i < sizeof($years_of_study)-1; $i++)
            {
                $check_year_start = mktime(0,0,0,7,1,$tmp_year);
                
                
                if($current_time > $check_year_start )
                {
                    $year++;
                }
                
                $tmp_year++;
            }
        }
        
        
        
    }
    
    if($year == "finished")
    {
        $active = 0;
    }
    else
    {
        $active = 1;
    }
    
    
    $update_course_year = $year;
    
    
    if($course_year != $update_course_year)
    {
        if($obj->normal_query("update student set course_year=?, active=? where roll_no = ?", array($update_course_year, $active, $roll_no)))
        {
            if($update_course_year == 2)
            {
                $obj->normal_query("update student_in_class set class_id = ? where student_id =?", array($update_course_year, $roll_no));
            }
            
            if($update_course_year == 3)
            {
                $obj->normal_query("update student_in_class set class_id = ? where student_id =?", array($update_course_year, $roll_no));
            }
            
            if($update_course_year == "finished")
            {
                $obj->normal_query("delete from student_in_class where student_id = ?", array($roll_no));
            }
        }
    }
    
    
    
    
    
}












?>