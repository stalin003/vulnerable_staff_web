<?php


include 'init.php';
include 'session_variables.php';

$obj = new base_class();


$obj->normal_query("SELECT class_teacher.id as rm_teacher_id, staff_profile.name, staff_profile.img_link, class_teacher.staff_id, class.class_name from staff_profile INNER JOIN class_teacher on staff_profile.id = class_teacher.staff_id INNER JOIN class ON class_teacher.class_id = class.id ORDER BY class.id");

$result = $obj->fetch_all();

foreach($result as $class_teacher)
{
    $rm_id = $class_teacher->rm_teacher_id;
    $name = $class_teacher->name;
    $pic = $class_teacher->img_link;
    $id = $class_teacher->staff_id;
    $class_name = $class_teacher->class_name;
    
    
    echo "

        <div class='class-teacher'>
           <img src='$pic'>

            <div class='teacher-name'>
                <h4>$name <br> &#40;$class_name&#41;</h4>
            </div>
            
        ";
    
    
    if($_SESSION['login'] == $login_staff_session)
        {
            
            echo "
            
                <div class='remove-class-teacher'>
                    <i class='rm-pic rm-mct fas fa-trash-alt' rel='$rm_id'></i>
                </div>
                
            
            
            
            ";
            
            
        }
    
    
    echo"
        </div>



        ";
    
    
    
}





?>


