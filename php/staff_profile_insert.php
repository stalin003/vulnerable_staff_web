<?php

include 'init.php';

$obj = new base_class();

$id = $name = $work = $mobile_no = $skills = $address = $description = $profile_pic="";

$target_dir = "../images/";
$target_file = "";
$uploadData = 0;
$uploadName = 0;
$uploadMobileNo = 0;
$uploadCheck = 0;
$uploadType = 0;
$uploadSize = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
//    if(!empty($_POST['id']))
//    {
//        $id = $obj->security($_POST['id']);
////        $sql = "select * from staff_profile where id='$id'";
//        
//        $obj->normal_query("select * from staff_profile where id=?", array($id));
//        
//        if($id < 0)
//        {
//            $uploadData = 0;
//        }
//        elseif($obj->count_rows() > 0)
//        {
//            $uploadData = 0;
//        }
//        else
//        {
//            $uploadData = 1;
//        }
//    }
    
    if(!empty($_POST['name']))
    {
        $name = $obj->security($_POST['name']);
        
        if(preg_match("/^[a-zA-Z.\s]*$/", $name))
        {
           $uploadName = 1; 
        }
        else
        {
            $uploadName = 0;
        }
        
    }
    
    if(!empty($_POST['work']))
    {
        $work = $obj->security($_POST['work']);
        
    }
    
    if(!empty($_POST['mobile_no']))
    {
        $mobile_no = $obj->security($_POST['mobile_no']);
        
        if(preg_match("/^[0-9]*$/", $mobile_no))
        {
            if(strlen($mobile_no) != 10)
            {
                $uploadMobileNo = 0;
            }
            elseif($mobile_no < 0)
            {
                $uploadMobileNo = 0;
            }
            else
            {
                $uploadMobileNo = 1;
            }
        }
        else
        {
            $uploadMobileNo = 0;
        }
    }
    
    if(!empty($_POST['skills']))
    {
        $skills = $obj->security($_POST['skills']);
        
    }
    
    if(!empty($_POST['address']))
    {
        
        
        $address = filter_var($_POST['address'],FILTER_SANITIZE_EMAIL);
    
        if(filter_var($address,FILTER_VALIDATE_EMAIL))
        {
            $address_valid = $address;
        }

        if(empty($address_valid))
        {
            $address_valid = "nil";
        }
        
        
      
    }
    
    if(!empty($_POST['Description']))
    {
        $description = $obj->security($_POST['Description']);
    }
    
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
    
    if($uploadName == 1 && $uploadMobileNo == 1 && $uploadCheck == 1 && $uploadType == 1 && $uploadSize == 1)
    {
//        $sql="insert into staff_profile(id,name,work,description,address,mobile_no,skills,img_link)value($id,'$name','$work','$description','$address',$mobile_no,'$skills','$profile_pic')"; 
        
        
        if($obj->normal_query("insert into staff_profile(name,work,description,address,mobile_no,skills,img_link)value(?,?,?,?,?,?,?)",array($name,$work,$description,$address_valid,$mobile_no,$skills,$profile_pic)))
        {
            imagejpeg($tmp_img, $profile_pic);
            echo  json_encode(array("status" => "success"));
        }
        else
        {
            echo json_encode(array("status" => "invalid entry"));
        }
    }
    else
    {
        echo json_encode(array("status" => "invalid entry"));
    }
    
    
    
   
//        
    
    
    
    
}


?>