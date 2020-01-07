<?php

include 'init.php';

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    
    
    echo "
    
    <form class='form-card' rel='$id' action='#' method='post' enctype='multipart/form-data'>
     <input type='file' class='file_to_upload' name='profile_pic' accept='image/jpeg,image/png' placeholder='Upload Pic' required>
     <span class='image_error'></span>
      <input type='submit' value='submit' name='submit'>
      <input class='cancel-btn' type='button' value='cancel'>

   </form>
    
    ";
}




?>




