

<?php

include 'init.php';

$obj = new base_class();

$id=$name=$work=$mobile_no=$skills=$address=$description="";

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    
//    $sql="select * from staff_profile where id='$id'";
    
    $obj->normal_query("select * from staff_profile where id = ?", array($id));
    
    $result = $obj->fetch_all();
    
    foreach($result as $profile)
    {
        $name = $profile->name;
        $work = $profile->work;
        $description = $profile->description;
        $address = $profile->address;
        $mobile_no = $profile->mobile_no;
        $skills = $profile->skills;
    }
}

echo "
            <form class='form-card' rel='$id' action='../php/staff_profile_update.php' method='post' enctype='multipart/form-data'>
              <input type='text' name='name' id='staff_update_name' placeholder='Name' value='$name' required>
              <span id='staff_update_name_error'></span>
              <input type='text' name='work' placeholder='Designation' value='$work' required>
              <input type='number' name='mobile_no' id='staff_update_mobile_no' placeholder='PhoneNo' value='$mobile_no' required>
              <span id='staff_update_mobile_no_error'></span>
              <input type='text' name='skills' placeholder='skills' value='$skills' required>
              <input type='email' id='staff_update_email' name='address' placeholder='Email' value='$address' required>
              <span id='staff_update_email_error'></span>
              <textarea name='Description' placeholder='Description' required>$description</textarea>
              <input type='file' id='file_to_update' name='profile_pic' accept='image/jpeg,image/png' placeholder='Upload Pic'>
              <span id='staff_update_image_error'></span>
              <input type='submit' value='update' name='update'>
              <input id='update-cancel-btn' type='button' value='cancel'>

           </form>
        ";
?>

<?php

$update_name = $update_work= $update_mobile_no = $update_skills = $update_address = $update_description = $update_profile_pic = null;

$target_dir = "../images/";
$target_file = "";
$update_data = 0;
$update_only_data = 0;

$uploadMobileNo = 0;
$uploadName = 0;

if(isset($_POST['update']))
{
    if(isset($_POST['name']))
    {
        $update_name = $obj->security($_POST['name']);
        $update_only_data = 2;
        if(preg_match("/^[a-zA-Z.\s]*$/", $update_name))
        {
           $uploadName = 1; 
        }
        else
        {
            $uploadName = 0;
        }
    }
    
    if(isset($_POST['work']))
    {
        $update_work = $obj->security($_POST['work']);
//        $update_work = $conn->real_escape_string($update_work);
        $update_only_data = 2;
    }
    
    if(isset($_POST['Description']))
    {
        $update_description = $obj->security($_POST['Description']);
//        $update_description = $conn->real_escape_string($update_description);
        $update_only_data = 2;
    }
    
    if(isset($_POST['address']))
    {
//        $update_address = $obj->security($_POST['address']);
        
        
        
        $update_address = filter_var($_POST['address'],FILTER_SANITIZE_EMAIL);
    
        if(filter_var($update_address,FILTER_VALIDATE_EMAIL))
        {
            $update_address_valid = $update_address;
        }

        if(empty($update_address_valid))
        {
            $update_address_valid = "nil";
        }
        
        
        
        
//        $update_address = $conn->real_escape_string($update_address);
        $update_only_data = 2;
    }
    
    if(isset($_POST['mobile_no']))
    {
        $update_mobile_no = $obj->security($_POST['mobile_no']);
        $update_only_data = 2;
        
        if(preg_match("/^[0-9]*$/", $update_mobile_no))
        {
            if(strlen($update_mobile_no) != 10)
            {
                $uploadMobileNo = 0;
            }
            elseif($update_mobile_no < 0)
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
    
    if(isset($_POST['skills']))
    {
        $update_skills = $obj->security($_POST['skills']);
        $update_only_data = 2;
    }
    
    if(!empty($_FILES['profile_pic']) && !empty($_FILES['profile_pic']['tmp_name']))
    {
        $target_file = $target_dir . time() . uniqid(rand()) . $_FILES['profile_pic']['name'];
        $update_profile_pic = $target_file;
        
        $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION ));
    
        $check = getimagesize($_FILES['profile_pic']['tmp_name']);

        if($image_type != 'jpg' && $image_type != 'jpeg' && $image_type != 'png')
        {
            $update_data = 0;
            $update_only_data = 2;
        }
        else
        {
            $update_data = 1;
            $update_only_data = 0;
            
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
            $update_data = 0;
            $update_only_data = 2;
        }
        else
        {
            $update_data = 1;
            $update_only_data = 0;
        }
        
        if($check == true)
        {
            $update_data = 1;
            $update_only_data = 0;
        }
        else
        {
            $update_data = 0;
            $update_only_data = 2;
        }
    }
    
    if($update_only_data == 2 && $uploadMobileNo == 1 && $uploadName == 1)
    {
//        $sql = "update staff_profile set name='$update_name', work='$update_work', description='$update_description', address='$update_address', mobile_no='$update_mobile_no', skills='$update_skills' where id='$id'";
        
        if($obj->normal_query("update staff_profile set name=?, work=?, description=?, address=?, mobile_no=?, skills=? where id=?", array($update_name,$update_work,$update_description,$update_address_valid,$update_mobile_no,$update_skills,$id)))
        {
            echo json_encode(array("status" => "success"));
        }
        else
        {
            echo json_encode(array("status" => "invalid entry"));
        }
    }
    elseif($update_data == 1 && $update_only_data == 0 && $uploadMobileNo == 1 && $uploadName == 1)
    {
//        $sql = "update staff_profile set name='$update_name', work='$update_work', description='$update_description', address='$update_address', mobile_no='$update_mobile_no', skills='$update_skills', img_link='$update_profile_pic' where id='$id'";
        
        if($obj->normal_query("update staff_profile set name=?, work=?, description=?, address=?, mobile_no=?, skills=?, img_link=? where id=?",array($update_name,$update_work,$update_description,$update_address_valid,$update_mobile_no,$update_skills,$update_profile_pic,$id)))
        {
            imagejpeg($tmp_img, $update_profile_pic);
            echo json_encode(array("status" => "success"));
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
    
        
    
}

//function validate($data)
//{
//    $data = strip_tags($data);
//    $data = stripslashes($data);
//    
//    return $data;
//}

?>


<script>

    $(document).ready(function(){
        
        
       $('#file_to_update').change(function(){

            var postData = new FormData($('.form-card')[1]);

            $.ajax({
                url:'../php/staff_profile_image_validation.php',
                data:postData,
                type:'POST',
                contentType:false,
                processData:false,
                cache:false,
                success:function(data)
                {
                    $('#staff_update_image_error').html(data);
                }
            });
        });

        $('#update-cancel-btn').click(function(){
            $('.staff-profile-update-card').hide();
            $('.form-card')[1].reset();
            $('#staff_update_image_error').html("");
            $('#staff_update_name_error').html("");
            $('#staff_update_mobile_no_error').html("");
            $('body').css({overflowY:'auto'});
            $('.black-screen').hide();
        });
        
//        $('.form-card').submit(function(event){
//            event.preventDefault();
//            var id =$(this).attr('rel');
//            var formdata = new FormData(this);
//            formdata.append('update','updateThis');
//            formdata.append('id',id);
//            
//            
//            $.ajax({
//                
//                url:'../php/staff_profile_update.php',
//                data:formdata,
//                type:'POST',
//                contentType:false,
//                processData:false,
//                cache:false,
//                success:function(){
//                    $('.staff-profile-update-card').hide();
//                    setTimeout(fetchdata(),1000);
//                    $('.black-screen').hide();
//                    $('body').css({overflowY:'auto'});
//                    alert("updated");
//                }
//                
//            });
//        });
    });

</script>
























