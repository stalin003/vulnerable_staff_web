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
        <link rel="stylesheet" type="text/css" href="../css/query.css">
        
        
        <?php
        
        if($_SESSION['login'] != $login_staff_session)
        {
        ?>    
        
        <link rel="stylesheet" type="text/css" href="../css/fix.css">  
            
        <?php        
        }
        
        
        ?>
        
        
    </head>
    <body>
       
      <div class="staff-profile-insert-card student-profile-insert-card vid-lect">
       
           <form class="form-card" action="../php/staff_profile_insert.php" method="post" enctype="multipart/form-data">
              <input type="text" name="title" placeholder="Title">
              <input type="text" name="embed-txt" placeholder="Place the embed snippet">
              <input type="submit" value="submit" name="submit">
              <input class="cancel-btn" type="button" value="cancel">

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
               <h2><i class="heading-icon fas fa-user-graduate"></i>Online Lecture</h2>
           </div>
<!--
            <div class="sch-btn col">
                <input class="find find-fix" type="text" placeholder="search" name="search">
                <select name="class_college">
                   <option selected>Search by</option>
                   <option>Name</option>
                   <option>Class</option>
                   <option>Roll no</option>
                </select>
                
                
                <input class="find" type="button" value="Search" name="search-btn">
            </div>
-->
            <div class="staff-btn">
                <input id="insert" type="button" value="INSERT" name="insert">
            </div>
        </section>
        
        
        <section class="lecture row">
        
           
            
            
        
        
        </section>
        
        <?php
        include 'footer.php';
        ?>
        
        <script src="../js/common.js"></script>
        
        <script>
        
            $(document).ready(function(){
                
                setTimeout(fetchvideo,1000);
                
                $(document).on('click','.icon-more-vid',function(){
                    $(this).siblings('.vid-over').children('.vid-del').css({'display':'block'});
                })
                
                $(document).on('click','.del-vid',function(){
                    
                    var id = $(this).attr('rel');
                    
                    
                    if(confirm("Are you sure?"))
                        {
                            $.ajax({
                        

                                    url:'../php/video_lec_del.php',
                                    data:{id:id},
                                    type:'POST',
                                    dataType:'json',
                                    success:function(data)
                                    {
                                        if(data.status == "success")
                                            {
                                                alert("Deleted");
                                                setTimeout(fetchvideo, 1000);
                                            }
                                        else
                                            {
                                                alert(data.status);
                                            }
                                    }

                                })
                        }
                    
                    
                });
                
                
                
                $(document).on('submit','.form-card',function(event){
                    event.preventDefault();
                    var data = $(this).serialize();
                    
                    $.ajax({
                        
                        url:'../php/video_lect.php',
                        data:data,
                        type:'POST',
                        dataType:'json',
                        success:function(data)
                        {
                            if(data.status == "success")
                                {
                                    alert("Added Successfully");
                                    $('.form-card')[0].reset();
                                    setTimeout(fetchvideo, 1000);
                                }
                            else
                                {
                                    alert(data.status);
                                }
                        }
                        
                    });
                })
            })
            
            
            function fetchvideo()
            {
                $.ajax({
                    url:'../php/video_lect_process.php',
                    data:{getvid:true},
                    type:'POST',
                    success:function(data){
                        $('.lecture').html(data);
                    }
                })
            }
        
        </script>
        
        
    </body>
</html>






























