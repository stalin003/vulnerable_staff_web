<?php


include 'init.php';
include 'session_variables.php';
$obj = new base_class();



if(isset($_POST['data']))
{
    $data = $_POST['data'];
    
    
    echo"

    <div class='timeline-divider'></div>";


    $obj->normal_query("SELECT substring(mentoring.student_id,8,2) as rm_student_id , mentoring.staff_id as rm_mentor_id ,staff_profile.name, staff_profile.id, staff_profile.img_link FROM staff_profile INNER JOIN mentoring ON staff_profile.id = mentoring.staff_id INNER JOIN student on student.roll_no = mentoring.student_id INNER JOIN student_in_class ON student.roll_no = student_in_class.student_id INNER JOIN class on student_in_class.class_id = class.id WHERE class.class_name = ? GROUP BY staff_profile.name, class.id ORDER BY student.roll_no",array($data));

    $mentor_result= $obj->fetch_all();

    foreach($mentor_result as $mentor)
    {
        $rm_student_id = $mentor->rm_student_id;
        $rm_mentor_id = $mentor->rm_mentor_id;
        $staff_id = $mentor->id;
        $pic = $mentor->img_link;
        $mentor_name = $mentor->name;

        echo "


        <div class='timeline-cotainer right'>
            <div class='content'>
                <div class='class-teacher mentor-pic'>
                   <img src='$pic'>

                    <div class='teacher-name'>
                        <h4>$mentor_name</h4>
                    </div>";
                    
                    if($_SESSION['login'] == $login_staff_session)
                        {
            
            echo "
            
                <div class='remove-class-mentor'>
                    <i class='rm-pic rm-mcm fas fa-trash-alt' rel1='$rm_mentor_id' rel2='$rm_student_id'></i>
                </div>
                
            
            
            
            ";
            
            
                        }
        
        echo "
                    
                </div>
            </div>
        </div>



        <div class='timeline-cotainer timeline-circle left'>
            <div class='content student-content'>
                <ul>";

        $obj->normal_query("SELECT student.roll_no FROM student INNER JOIN mentoring ON student.roll_no = mentoring.student_id INNER JOIN student_in_class ON student.roll_no = student_in_class.student_id INNER JOIN class ON student_in_class.class_id = class.id WHERE class.class_name = ? AND mentoring.staff_id = ?",array($data, $staff_id));

        $std_list = $obj->fetch_all();

        foreach($std_list as $std)
        {
            $roll_no = $std->roll_no;

            echo "<li>$roll_no</li>";
        }

      echo"      </ul>
            </div>

        </div>

        ";
    }
    
}




?>









<!--

<div class="timeline-divider"></div>
                       
<div class="timeline-cotainer right">
    <div class="content">
        <div class="class-teacher mentor-pic">
           <img src="../images/1564104390432601445d3a56c621ccahugh-jackman_sc_768x1024.png">

            <div class="teacher-name">
                <h4>Hugh Jackman <br> &#40;AMCA&#41;</h4>
            </div>
        </div>
    </div>
</div>



<div class="timeline-cotainer timeline-circle left">
    <div class="content student-content">
        <ul>
            <li>111703917101</li>
            <li>111703917102</li>
            <li>111703917103</li>
            <li>111703917104</li>
            <li>111703917105</li>
            <li>111703917106</li>
            <li>111703917107</li>
            <li>111703917108</li>
            <li>111703917109</li>
            <li>111703917110</li>
            <li>111703917111</li>
        </ul>
    </div>
</div>


<div class="timeline-cotainer right">
    <div class="content">
        <div class="class-teacher mentor-pic">
           <img src="../images/1564104098460488145d3a55a20564awill-smith1.jpg">

            <div class="teacher-name">
                <h4>Will Smith <br> &#40;AMCA&#41;</h4>
            </div>
        </div>
    </div>
</div>



<div class="timeline-cotainer timeline-circle left">
    <div class="content student-content">
        <ul>
            <li>111703917101</li>
            <li>111703917102</li>
            <li>111703917103</li>
            <li>111703917104</li>
            <li>111703917105</li>
            <li>111703917106</li>
            <li>111703917107</li>
            <li>111703917108</li>
            <li>111703917109</li>
            <li>111703917110</li>
            <li>111703917111</li>
        </ul>
    </div>
</div>


<div class="timeline-cotainer right">
    <div class="content">
        <div class="class-teacher mentor-pic">
           <img src="../images/15640908625287796425d3a21ee6958515634942482610209525d310768abde0600px-Dendi_DHS_2015.jpg">

            <div class="teacher-name">
                <h4>Dendi <br> &#40;AMCA&#41;</h4>
            </div>
        </div>
    </div>
</div>



<div class="timeline-cotainer timeline-circle left">
    <div class="content student-content">
        <ul>
            <li>111703917101</li>
            <li>111703917102</li>
            <li>111703917103</li>
            <li>111703917104</li>
            <li>111703917105</li>
            <li>111703917106</li>
            <li>111703917107</li>
            <li>111703917108</li>
            <li>111703917109</li>
            <li>111703917110</li>
            <li>111703917111</li>
        </ul>
    </div>
</div>-->
