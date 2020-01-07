<?php

include 'init.php';

$obj = new base_class();


$obj->normal_query("SELECT * from class WHERE id NOT IN(SELECT class_id FROM class_teacher)");

$class_result = $obj->fetch_all();


echo "


<form class='form-card' action='#' method='post'>
             
             <div id='teacher_or_mentor'>
                 
                 <input class='fix-radio' type='radio' name='select-insertion' value='teacher' checked>Teacher
                 <input class='fix-radio' type='radio' name='select-insertion' value='mentor'>Mentor
                 
             </div>
             
              <div class='selector-container'>
                  <div class='teacher-container'>
                      <select class='left-t' name='class' required>
                         <option value=''>Select Class</option>";


foreach($class_result as $class)
{
    $class_id = $class->id;
    $class_name = $class->class_name;
    echo"
    
    <option value='$class_id'>$class_name</option>
    
    ";
}

echo"
                          
                      </select>

                      <select  class='left-t' name='teacher_id' required>
                         <option value=''>Select Teacher</option>";



$obj->normal_query("SELECT * FROM staff_profile WHERE id NOT IN(SELECT staff_id FROM class_teacher)");

$teacher_result = $obj->fetch_all();

foreach($teacher_result as $teacher)
{
    
    $teacher_id = $teacher->id;
    $teacher_name = $teacher->name;
    echo"
    
    <option value='$teacher_id'>$teacher_name</option>
    
    ";
}


echo"                       
                      </select>
                    <input type='submit' value='submit' name='submit'>
                    <input class='cancel-btn' type='button' value='cancel'>
                  </div>
              
                  <div class='mentor-container'>
                        <select name='class_m' class='mentor-class right-t'>
                            <option value=''>Select Class</option>";

$obj->normal_query("select * from class");

$class_mentor = $obj->fetch_all();

foreach($class_mentor as $class)
{
    $class_id = $class->id;
    $class_name = $class->class_name;
    echo"
    
    <option>$class_name</option>
    
    ";
}

echo"
                        </select>
                    

                      <select name='student-start' class='std-class-for-mentor right-t'>

                    
                      </select>

                      <select name='student-end'  class='std-class-for-mentor-to std-class-for-mentor right-t'>
                         
                      </select>

                      <select class='right-t' name='teacher'>
                        <option value=''>Select Mentor</option>";


$obj->normal_query("SELECT id, name from staff_profile");

$mentor_result = $obj->fetch_all();

foreach($mentor_result as $mentor)
{
    $mentor_id = $mentor->id;
    $mentor_name = $mentor->name;
    echo "
    
    <option value='$mentor_id'>$mentor_name</option>
    
    ";
}

                          
echo "
                      </select>
                    <input type='submit' value='submit' name='submit'>
                    <input class='cancel-btn' type='button' value='cancel'>


                  </div>
              </div>

           </form>




";



?>