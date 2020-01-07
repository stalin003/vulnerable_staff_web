<?php


include 'init.php';

$obj = new base_class();


$target_dir = "../images/";
$target_file = "";
$uploadData = 0;
$uploadType = 0;
$uploadSize = 0;

if(!empty($_POST['title']) && !empty($_POST['description']))
{
    $title = $obj->security($_POST['title']);
    
    $description = $obj->security($_POST['description']);
    
    $target_file = $target_dir.time().uniqid(rand()).$_FILES['profile_pic']['name'];
    $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION ));
    
    $check = getimagesize($_FILES['profile_pic']['tmp_name']);
    
    if($_FILES['profile_pic']['size'] > 5000000 )
    {
        $uploadSize = 0;
    }
    else
    {
        $uploadSize = 1;
    }
    
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
        
        
        
        $new_width = 1200;
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
    
    
    $cover_pic = $target_file;
    
    if($uploadData == 1 && $uploadType == 1 && $uploadSize == 1)
    {
        if($obj->normal_query("insert into industrial_visit(title,description,cover_pic)values(?,?,?)", array($title,$description,$cover_pic)))
        {
            imagejpeg($tmp_img, $cover_pic);
            echo json_encode(array("status" => "success"));
        }
    }
    else
    {
        echo json_encode(array("status" => "Invalid File"));
    }
}



if(!empty($_POST['id']) && !empty($_FILES['profile_pic']['tmp_name']))
{
    $id = $_POST['id'];
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
        
        
        
        $new_width = 800;
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
    
    if($uploadData == 1 && $uploadType == 1 && $uploadSize == 1)
    {
        if($obj->normal_query("insert into industrial_visit_pics(pics,industrial_visit_id)values(?,?)",array($profile_pic, $id)))
        {
            imagejpeg($tmp_img, $target_file);
            echo json_encode(array("status" => "success"));
        }
        else
        {
            echo json_encode(array("status" => "Invalid File"));
        }
    }
    
    
    
    
    
    
    
    
}




?>














