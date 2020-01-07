<?php

include 'init.php';

$obj = new base_class();

if(isset($_POST['data']))
{
    $search_data = $_POST['data'];
    
    
    
    
    $obj->normal_query("SELECT * from class LEFT JOIN student_in_class ON class.id = student_in_class.class_id LEFT JOIN student on student_in_class.student_id = student.roll_no WHERE class.class_name = ? ORDER BY student.roll_no ASC", array($search_data));
    
    $row_count = $obj->count_rows();
    
    $limit = 10;
    
    $end_page = ceil($row_count/$limit);
    
    
    
    if(!empty($_POST['page']))
    {
        
        $page = $_POST['page']; 
        
        if($page > $end_page)
        {
            $page = $end_page;
        }
    }
    else
    {
        $page = 1;
    }
    
    
    $start_row = ($page - 1) * $limit;
    
    
    
    
    
    
    
    
    $obj->normal_query("SELECT LOWER(full_name) as full_name, img_link, roll_no, gender, mobile_number, email, local_other_state, caste, religion, remarks from class LEFT JOIN student_in_class ON class.id = student_in_class.class_id LEFT JOIN student on student_in_class.student_id = student.roll_no WHERE class.class_name = ? ORDER BY student.roll_no ASC limit $start_row, $limit", array($search_data));
    
    
    $result = $obj->fetch_all();
    
    
    echo "
    
        <table class='student-table'>
            <tr>
                <th>Image</th>
                <th>Roll no</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Local or Other State/NRI</th>
                <th>Caste</th>
                <th>Religion</th>
                <th>Remarks</th>
                <th>Operation</th>
            </tr>
    
    
    
    
    
    ";
    
    foreach($result as $student_detail)
    {
        
        $img = $student_detail->img_link;
        $roll_no = $student_detail->roll_no;
        $fname = $student_detail->full_name;
        $gender = $student_detail->gender;
        $phone = $student_detail->mobile_number;
        $email = $student_detail->email;
        $local_nri = $student_detail->local_other_state;
        $caste = $student_detail->caste;
        $religion = $student_detail->religion;
        $remarks = $student_detail->remarks;
        
        
        if($img == "" && $roll_no == "" && $fname == ""  && $gender == "" && $phone == "" && $email =="")
        {
            echo "
                <tr>
                    <td colspan = 11 style='padding:10px'>no record found</td>
                </tr>
                ";
        }
        else
        {
            echo "
        
            <tr>
                <td><img class='td-img' src='$img' alt='naruto_pic'></td>
                <td>$roll_no</td>
                <td>$fname</td>
                <td>$gender</td>
                <td>$phone</td>
                <td>$email</td>
                <td>$local_nri</td>
                <td>$caste</td>
                <td>$religion</td>
                <td>$remarks</td>
                <td>
                <i rel='$roll_no' id='student-delete' class='icon-table fas fa-trash'></i></td>
            </tr>





            ";
        }
    }
    
    echo "</table>";
    
    
    
    echo "
    <div class='pagination'>
        <div class='pages'>";

    if($page > 1)
    {
        echo "

            <div class='page-link'>

                <div class='prev-link gen_link' rel='$page'>
                    <a href='#'>prev</a>    
                </div>
            </div>

        ";
    }

    if($page < $end_page)
    {
        echo "

            <div class='page-link-2'>
                <div class='next-link gen_link' rel='$page' rel2='$end_page'>
                    <a href='#'>next</a>    
                </div>
            </div>

        ";
    }


    echo "  </div>

    </div>

    ";
    
}



?>



                    
                