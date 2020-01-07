<?php

include 'init.php';

$obj = new base_class();

$default_pic = "../images/default_pics/guest_lecturer.jpg";
$target_dir = "../images/";
$target_file = "";
$uploadData = 0;
$uploadName = 0;
$uploadCheck = 0;
$uploadType = 0;
$uploadSize = 0;


if(!empty($_POST['fname']) && !empty($_POST['class']) && !empty($_POST['subject']) && !empty($_POST['reports']) && !empty($_POST['date']))
{
    $uploadData = 1;
    
    $fname = $obj->security($_POST['fname']);
    $class = $obj->security($_POST['class']);
    $subject = $obj->security($_POST['subject']);
    $from_ch = $obj->security($_POST['from_ch']);
    $to_ch = $obj->security($_POST['to_ch']);
    $report = $obj->security($_POST['reports']);
    $date = $obj->security($_POST['date']);
    
    
    
    if(!empty($_FILES['profile_pic']['name']))
    {
        $uploadData = 2;
        $target_file = $target_dir.time().uniqid(rand()).$_FILES['profile_pic']['name'];
        $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION ));

        $check = getimagesize($_FILES['profile_pic']['tmp_name']);

        if($check == true)
        {
            $uploadCheck = 1;
        }
        else
        {
            $uploadCheck = 0;
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
        $profile_pic = $default_pic;
    }
    
    
    
    if($uploadData == 1)
    {        
        if($obj->normal_query("insert into guest_lecturer(first_name,subject,start_ch,end_ch,reports,img_link,class,date)values(?,?,?,?,?,?,?,?)",array($fname,$subject,$from_ch,$to_ch,$report,$profile_pic,$class,$date)))
        {
            echo json_encode(array("status" => "success"));
        }
        else
        {
            echo json_encode(array("status" => "Invalid Entry"));
        }
    }
    elseif($uploadData == 2 && $uploadCheck == 1 && $uploadType == 1 && $uploadSize == 1)
    {
        if($obj->normal_query("insert into guest_lecturer(first_name,subject,start_ch,end_ch,reports,img_link,class,date)values(?,?,?,?,?,?,?,?)",array($fname,$subject,$from_ch,$to_ch,$report,$profile_pic,$class,$date)))
        {
            imagejpeg($tmp_img, $profile_pic);
            echo json_encode(array("status" => "success"));
        }
        else
        {
            echo json_encode(array("status" => "Invalid Entry"));
        }
    }
    else
    {
        echo json_encode(array("status" => "Invalid Entry"));
    }
    
    
    
   
//        
    
    
    
    
}
else
{
    echo json_encode(array("status" => "plz fill the field"));
}


?>


























