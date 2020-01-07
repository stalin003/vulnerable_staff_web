<?php

include 'init.php';
include 'session_variables.php';
$obj = new base_class();


$default_year = "default";
$cl_and_cr_code ="1117039";
$start_no = "100";
$end_no = "200";

if(isset($_POST['searchData']) && isset($_POST['searchYear']))
{
    $campus = $_POST['searchData'];
    $year = $_POST['searchYear'];
    
    if($year == $default_year)
    {
        $obj->normal_query("SELECT placement.id as pid, student.full_name,student.img_link, placement.company_name, placement.salary, placement.position, concat('20',SUBSTRING(student.roll_no,8,2)) AS year FROM student INNER JOIN placement ON student.roll_no = placement.student_id WHERE placement.campus = ? ORDER BY placement.salary DESC", array($campus));
    }
    else
    {
        $substr_year = substr($year,2,2);
        $start_rollno = $cl_and_cr_code .  $substr_year . $start_no;
        $end_rollno = $cl_and_cr_code .  $substr_year .  $end_no;
        
        
        $obj->normal_query("SELECT placement.id as pid, student.full_name, student.img_link, placement.company_name, placement.salary, placement.position, concat('20',SUBSTRING(student.roll_no,8,2)) AS year FROM student INNER JOIN placement ON student.roll_no = placement.student_id WHERE placement.campus = ? AND placement.student_id BETWEEN ? and ? ORDER BY placement.student_id ASC", array($campus, $start_rollno, $end_rollno));
    }
    
    
    
    $result = $obj->fetch_all();
    
    if(!$result)
    {
        echo "<p 
                colspan = 9 style='padding:10px; border:1px solid #000; width:100%; text-align:center'>No Record Found
            </p>";
    }
    
    foreach($result as $std)
    {
        $id = $std->pid;
        $img_link = $std->img_link;
        $fname = $std->full_name;
        $cname = $std->company_name;
        $position = $std->position;
        $salary = $std->salary;
        $year = $std->year;
        
        echo "
    
    
        <div class='placement-profile'>

            <div class='placement-profile-pic'>
                <div class='placement-pic'>
                    <img src='$img_link' alt='profile_pic'>
                </div>
                <span><p>$fname</p></span>
            </div>

            <div class='placement-details'>
                <h4>$cname</h4>
                <h4>$position</h4>";
        
        if(!empty($salary))
        {
            echo "
                <p>$salary" . "L anum</p>
            
            ";
        }
        
        
                
        echo "  <p>$year batch</p>
                <div class='placement-more'>";
        
        if($_SESSION['login'] == $login_staff_session)
            {
                echo "   <i rel='$id' class='placement-icon fas fa-trash-alt'></i>";
                        
            }
                        
                        
        echo"
                </div>
            </div>



        </div>



        ";
        
        
        
    }
    
    
    
    
}


?>