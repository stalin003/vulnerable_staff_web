<?php

include 'init.php';
date_default_timezone_set("Asia/Kolkata");

$obj = new base_class();


$target_dir = "../images/";
$default_male_pic = "../images/default_pics/male.png";
$default_female_pic = "../images/default_pics/female.png";
$target_file = "";
$uploadData = 0;
$uploadType = 0;
$uploadSize = 0;


if(empty($_POST['mobile_no']))
{
    $mb_no = "1234567890";
}
else
{
    $mb_no = $obj->security($_POST['mobile_no']);
}

if(!empty($_POST['roll_no']) && !empty($_POST['fname']) && !empty($mb_no) && !empty($_POST['gender']))
{
    
    $roll_no = $obj->security($_POST['roll_no']);
    $fname = $obj->security($_POST['fname']);
    
    if(preg_match("/^[a-zA-Z.\s]*$/", $fname))
    {
       $fname_valid = $fname;
    }
    
    
    $mobile_no = $mb_no;
    
    
    if(preg_match("/^[0-9]*$/", $mobile_no))
    {
        if(strlen($mobile_no) == 10 && $mobile_no > 0)
        {
            $mobile_no_valid = $mobile_no;
        }
    }
    
    if($mobile_no_valid == "1234567890")
    {
        $mobile_no_valid = "nil";
    }
    
    
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $email_valid = $email;
    }
    
    if(empty($email_valid))
    {
        $email_valid = "nil";
    }
    
    $gender = $obj->security($_POST['gender']);
    
    $local_nri = $obj->security($_POST['local_nri']);
    
    $caste = $obj->security($_POST['caste']);
    
    if(preg_match("/^[a-zA-Z-\s]*$/", $caste))
    {
       $caste_valid = $caste; 
    }
    
    if(empty($caste_valid))
    {
        $caste_valid = "nil";
    }
    
    $religion = $obj->security($_POST['religion']);
    
    if(preg_match("/^[a-zA-Z-\s]*$/", $religion))
    {
       $religion_valid = $religion; 
    }
    
    if(empty($religion_valid))
    {
        $religion_valid = "nil";
    }
    
    $remarks = $obj->security($_POST['remarks']);
    
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
        
        for($i = $joined_year; $i< $current_year + 1; $i++)
        {
            $years_of_study[$i]= mktime(0,0,0,7,1,$i);
            
//            echo "year of study. $years_of_study[$i]  year: $i <br>";
        }
        
        $tmp_year = $joined_year;
        
//        echo "size" . sizeof($years_of_study) . "<br>";
        
        if(sizeof($years_of_study) > 4)
        {
            $year = "finished";
        }
        else
        {
            
            $year = 0;
//            echo $year . " <br>";
//            echo sizeof($years_of_study) . "<br>";
//            echo "current yer " . $current_time . "<br>";
//            echo  "tmp year " . $tmp_year . "<br>";
            

            
            for($i = 0; $i < sizeof($years_of_study)-1; $i++)
            {
                $check_year_start = mktime(0,0,0,7,1,$tmp_year);
                
//                echo $check_year_start;
                if($current_time > $check_year_start )
                {
                    $year++;
                    
//                    echo "year $year <br>";
                }
                
                $tmp_year++;
                
            }
        }
        
        
        
        
    }
    
    if($year == "finished")
    {
        $active = 0;
    }
    elseif(strtolower($remarks) == "droupout")
    {
        $active = 0;
    }
    else
    {
        $active = 1;
    }
    
    
    if($mobile_no_valid == "nil")
    {
        $password = password_hash("LoyolaMCA",PASSWORD_DEFAULT);
    }
    else
    {
        $password = password_hash($mobile_no_valid,PASSWORD_DEFAULT);
    }
    
    
    
    
    $course_year = $year;
    
    
    
    
    
    
    
    

    if(!empty($_FILES['profile_pic']['name']))
    {
        $target_file = $target_dir.time().uniqid(rand()).$_FILES['profile_pic']['name'];
        $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION ));

        $check = getimagesize($_FILES['profile_pic']['tmp_name']);

        if($check == true)
        {
            $uploadData = 1;
        }
        else
        {
            $uploadData = 0;
        }

        if($image_type != 'jpg' && $image_type != 'jpeg' && $image_type != 'png')
        {
            $uploadType = 0;
        }
        else
        {
            $uploadType = 1;


            if($image_type == 'jpg')
            {
                $img = imagecreatefromjpeg($_FILES['profile_pic']['tmp_name']);
            }
            if($image_type == 'jpeg')
            {
                $img = imagecreatefromjpeg($_FILES['profile_pic']['tmp_name']);
            }
            if($image_type == 'png')
            {
                $img = imagecreatefrompng($_FILES['profile_pic']['tmp_name']);
            }



            $new_width = 450;
            $old_width = imagesx($img);
            $old_height = imagesy($img);
            $new_height = floor($old_height * ($new_width/$old_width));

            if($old_width > $new_width)
            {
                $tmp_img = imagecreatetruecolor($new_width, $new_height);

                imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $old_width,       $old_height);
            }
            else
            {
                $tmp_img = $img;
            }


        }

        if($_FILES['profile_pic']['size'] > 5000000 )
        {
            $uploadSize = 0;
        }
        else
        {
            $uploadSize = 1;
        }

        $profile_pic = $target_file;
    }
    else
    {
        if($gender == "male")
        {
            $profile_pic = $default_male_pic;
        }
        if($gender == "female")
        {
            $profile_pic = $default_female_pic;
        }
        if($gender == "others")
        {
            $profile_pic = $default_female_pic;
        }
        
        $uploadData = 2;
    }
    
    if($uploadData == 1 && $uploadType == 1 && $uploadSize == 1)
    {
        
        
        if($obj->normal_query("insert into student(roll_no, full_name, gender, mobile_number, email, active, password, course_year, img_link, local_other_state, caste, religion, remarks) values(?,?,?,?,?,?,?,?,?,?,?,?,?)", array($roll_no, $fname_valid,$gender, $mobile_no_valid, $email_valid, $active, $password, $course_year, $profile_pic, $local_nri, $caste_valid, $religion_valid, $remarks)))
        {
            imagejpeg($tmp_img, $profile_pic);
            if($course_year == 1)
            {
                $obj->normal_query("insert into student_in_class(class_id,student_id)values(?,?)",array($course_year,$roll_no));
                
                echo json_encode(array("status" => "success"));
            }
            
            if($course_year == 2)
            {
                $obj->normal_query("insert into student_in_class(class_id,student_id)values(?,?)",array($course_year,$roll_no));
                echo json_encode(array("status" => "success"));
            }
            
            if($course_year == 3)
            {
                $obj->normal_query("insert into student_in_class(class_id,student_id)values(?,?)",array($course_year,$roll_no));
                echo json_encode(array("status" => "success"));
            }
        }
        else
        {
            echo json_encode(array("status" => "Invalid Entry"));
        }
        
        
    }
    
    if($uploadData == 2)
    {
        if($obj->normal_query("insert into student(roll_no, full_name, gender, mobile_number, email, active, password, course_year, img_link, local_other_state, caste, religion, remarks) values(?,?,?,?,?,?,?,?,?,?,?,?,?)", array($roll_no, $fname_valid, $gender, $mobile_no_valid, $email_valid, $active, $password, $course_year, $profile_pic, $local_nri, $caste_valid, $religion_valid, $remarks)))
        {
            if($course_year == 1)
            {
                $obj->normal_query("insert into student_in_class(class_id,student_id)values(?,?)",array($course_year,$roll_no));
                echo json_encode(array("status" => "success"));
            }
            
            if($course_year == 2)
            {
                $obj->normal_query("insert into student_in_class(class_id,student_id)values(?,?)",array($course_year,$roll_no));
                echo json_encode(array("status" => "success"));
            }
            
            if($course_year == 3)
            {
                $obj->normal_query("insert into student_in_class(class_id,student_id)values(?,?)",array($course_year,$roll_no));
                echo json_encode(array("status" => "success"));
            }
            
            if($course_year == "finished")
            {
                echo json_encode(array("status" => "success"));
            }
        }
        else
        {
            echo json_encode(array("status" => "Invalid Entry"));
        }
    }
    
    if($uploadData == 0)
    {
        echo json_encode(array("status" => "Invalid Entry"));
    }
    
}
else
{
    echo json_encode(array("status" => "Plz fill fields"));
}

?>






























