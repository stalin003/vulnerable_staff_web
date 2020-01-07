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
       <div class="staff-profile-insert-card guest-lecturer-insert-card">
       
       <form class="form-card" action="../php/staff_profile_insert.php" method="post" enctype="multipart/form-data">
          <input type="text" name="fname" placeholder="Name" required>
          <input type="text" name="class" placeholder="Class" required>
          <input type="text" name="subject" placeholder="Subject" required>
          <input type="number" name="from_ch" placeholder="From Chapter [Optional]">
          <input type="number" name="to_ch" placeholder="To Chapter [Optional]">
          <input type="date" name="date" placeholder="Date Of Class Taken" required>
          <textarea name="reports" placeholder="Reports" required></textarea>
          <input type="file" id="file_to_upload" name="profile_pic" accept="image/jpeg,image/png" placeholder="Upload Pic">
          <span id="guest_lecturer_image_error"></span>
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
               <h2><i class="heading-icon fas fa-user-tie"></i>Guest Lecturers</h2>
           </div>
            
            <?php
            
            if($_SESSION['login'] == $login_staff_session)
            {
                
            ?>   
            
<!--
             <div id="res" class="staff-btn col">
                <input id="search-bar" class="find" type="text" placeholder="search" name="search">
                <input id="search-btn" class="find" type="button" value="Search" name="search-btn">
            </div>
-->
            <div class="staff-btn">
                <input id="insert" type="button" value="Insert Profile" name="insert">
            </div> 
            
                
            <?php            
            }
            
            
            ?>
            
            
        </section>
        
        
        
        <section class="row">
        <div class="guest-profile" id="guest_lecturer">
           
<!--
           <div class="guest-reports">
               
               <div class="guest-lecturer">

                    <div class="guest-lecturer-profile">

                        <div class="guest-lecturer-profile-pic">
                            <div class="guest-lecturer-pic">
                                <img src="../images/164995.jpg" alt="profile_pic">
                            </div>
                            <span><p>nami</p></span>
                        </div>

                        <div class="guest-lecturer-details">
                            <h4>Subject Title</h4>
                            <p>ch - 1 to ch - 10</p>
                            <p>class - 2019</p>
                        </div>



                    </div>

                </div>
                
                <div class="reports">
                    <div class="tab col">
                        <button class="act">Reports</button>
                        <div class='staff-more gl-more col'>
                            <button><i class='icon-more fas fa-ellipsis-v'></i></button>
                            <div class='staff-more-option gl-more-option'>
                                <ul class='col'>
                                    <li><a rel='$id' class='staff_profile_update gl_update' href='#'><i class='icon-more fas fa-user-edit'></i>update</a></li>
                                    <li><a rel='$id' class='staff_profile_delete gl_delete' href='#'><i class='icon-more fas fa-trash-alt'></i>delete</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                        </p>
                    </div>
                </div>
               
           </div>
-->
           
           
           
<!--
           <div class="guest-reports">
               
               <div class="guest-lecturer">

                    <div class="guest-lecturer-profile">

                        <div class="guest-lecturer-profile-pic">
                            <div class="guest-lecturer-pic">
                                <img src="../images/164995.jpg" alt="profile_pic">
                            </div>
                            <span><p>nami</p></span>
                        </div>

                        <div class="guest-lecturer-details">
                            <h4>Subject Title</h4>
                            <p>ch - 1 to ch - 10</p>
                            <p>2019</p>
                        </div>



                    </div>

                </div>
                
                <div class="reports">
                    <div class="tab col">
                        <button class="act">reports</button>
                        <div class='staff-more gl-more col'>
                            <button><i class='icon-more fas fa-ellipsis-v'></i></button>
                            <div class='staff-more-option gl-more-option'>
                                <ul class='col'>
                                    <li><a rel='$id' class='staff_profile_update gl_update' href='#'><i class='icon-more fas fa-user-edit'></i>update</a></li>
                                    <li><a rel='$id' class='staff_profile_delete gl_delete' href='#'><i class='icon-more fas fa-trash-alt'></i>delete</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                        </p>
                    </div>
                </div>
               
           </div>
-->
            
            
            
            
        </div>
        
        </section>
        
        
        <?php
        include 'footer.php';
        ?>
        
        
        <script type="text/javascript" src="../js/common.js"></script>
        
        <script>
        
            
            $(document).ready(function(){
                
                setTimeout(function(){
                  fetch_guest_lecturer(); 
               }, 1000);
                
           
                
                $(document).on('click','.prev-link',function(){
                    
                    var page = $(this).attr('rel');
                    if(page < 2)
                        {
                            page = 1;
                        }
                    else
                        {
                            page--;
                        }
                    fetch_guest_lecturer(page);
                });
                
                $(document).on('click','.next-link',function(){
                    
                    var page = $(this).attr('rel');
                    page++;
                    fetch_guest_lecturer(page);
                });
                
                
                
                
                $('.guest-lecturer-insert-card .form-card').submit(function(event){
                    event.preventDefault();
                    
                    var postData = new FormData(this);
                    
                    $.ajax({
                        
                        url:"../php/guest_lecturer_insert.php",
                        data:postData,
                        type:'POST',
                        contentType:false,
                        cache:false,
                        processData:false,
                        dataType:'json',
                        success:function(data)
                        {
                            if(data.status == "success")
                                {
                                    alert("uploaded");
                                    $('.guest-lecturer-insert-card .form-card')[0].reset();
                                    $('.guest-lecturer-insert-card').hide();
                                    $('body').css({overflowY:'auto'});
                                    $('.black-screen').hide();
                                    $('.form-card')[0].reset();
                                    $('section').css({"filter":"blur(0px)"});
                                    $('header').css({"filter":"blur(0px)"});
                                    setTimeout(fetch_guest_lecturer, 1000);
                                }
                            else
                                {
                                    alert(data.status);
                                }
                        }
                        
                    });
                });
                
                
                
                
                $(document).on('click','.gl-more',function(){
                    
                    $(this).children('button').toggleClass('act');
                    $(this).children('.gl-more-option').toggle();
                });
                
                
                $(document).on('click','.gl_delete',function(event){
                    event.preventDefault();
                    var data = $(this).attr('rel');

                    if(confirm('are you sure?'))
                        {
                            $.ajax({

                                url:'../php/guest_lecturer_delete.php',
                                data:{id:data},
                                type:'POST',
                                success:function(data)
                                {
                                    alert('deleted');
                                    setTimeout(fetch_guest_lecturer,1000);
                                }

                            });
                        }
                });
                
                
                
                $('#file_to_upload').change(function(){
                    
                    var postData = new FormData($('.form-card')[0]);
                    
                    $.ajax({
                        url:'../php/staff_profile_image_validation.php',
                        data:postData,
                        type:'POST',
                        contentType:false,
                        processData:false,
                        cache:false,
                        success:function(data)
                        {
                            $('#guest_lecturer_image_error').html(data);
                        }
                    });
                });
                
                
            });
            
            
            
            function fetch_guest_lecturer(page){
                    $.ajax({
                        url:'../php/guest_lecturer_process.php',
                        data:{page:page},
                        type:'POST',
                        success:function(data){
                            $('#guest_lecturer').html(data);
                        }
                    });
                }
        
        </script>

    </body>
</html>






























