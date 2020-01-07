<?php

include 'init.php';

if(isset($_FILES['profile_pic']['tmp_name']))
{
    $file = getimagesize($_FILES['profile_pic']['tmp_name']);
    
    $image_extension = strtolower(pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION));
    
    if($file != true)
    {
        die('invalid file');
    }
    
    if($_FILES['profile_pic']['size'] > 5000000 )
    {
        die('upload image size less than 5mb');
    }
    
    if($image_extension != 'jpg' && $image_extension != 'jpeg' && $image_extension != 'png')
    {
        die('only jpg, jpeg and png images are supported');
    }
    
    
}


?>