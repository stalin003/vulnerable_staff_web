<?php

include '../php/session_variables.php';


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include 'header.php';
        ?>
        <link rel="stylesheet" type="text/css" href="../css/staff_profile.css">
    </head>
    <body>
       <div class="staff-profile-insert-card">
       
       <form class="form-card" action="../php/staff_profile_insert.php" method="post" enctype="multipart/form-data">
          <span id="staff_id_error"></span>
          <input type="text" name="name" placeholder="Name" required>
          <input type="text" name="class" placeholder="Class" required>
          <input type="number" name="mobile_no" placeholder="PhoneNo" required>
          <input type="text" name="subject" placeholder="Subject" required>
          <input type="text" name="TOF" placeholder="Title Of the Lecture" required>
          <textarea name="Description" placeholder="Description" required></textarea>
          <input type="file" id="file_to_upload" name="profile_pic" accept="image/jpeg,image/png" placeholder="Upload Pic" required>
          <span id="staff_image_error"></span>
          <input type="submit" value="submit" name="submit">
          <input id="cancel-btn" type="button" value="cancel">
           
       </form>

<!--
       <div class="pass-card">
               <p><b>Change password</b></p>
               <input type="password" placeholder="current password">
               <input type="password" placeholder="new password">
               <input type="password" placeholder="confirm password">
               <input id="confirm" type="button" value="confirm">
               <input id="cancel" type="button" value="cancel">
           </div>
-->
        </div>
        
        <div class="staff-profile-update-card">
<!--
            <form class="form-card" action="../php/staff_profile_update.php" method="post" enctype="multipart/form-data">
              <input type="text" name="name" placeholder="Name" value="">
              <input type="text" name="work" placeholder="Occupation">
              <input type="number" name="mobile_no" placeholder="PhoneNo">
              <input type="text" name="skills" placeholder="skills">
              <textarea name="address" placeholder="Address"></textarea>
              <textarea name="Description" placeholder="Description"></textarea>
              <input type="file" id="file_to_update" name="profile_pic" accept="image/jpeg,image/png" placeholder="Upload Pic">
              <span id="staff_update_image_error"></span>
              <input type="submit" value="update" name="update">
              <input id="update-cancel-btn" type="button" value="cancel">

           </form>
-->
        </div>

        <?php
        include 'nav_and_more.php';
        ?>
        
        <section class="row">
           <div class="box head-text">
               <h2>Sports</h2>
           </div>
        </section>
        
        
        <section class="row sports-section">
               
            
        </section>
        
        
        <?php
        include 'footer.php';
        ?>
        

    </body>
</html>