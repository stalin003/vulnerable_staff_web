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
      
       <div class="staff-profile-insert-card">
       
       <form class="form-card" action="../php/staff_profile_insert.php" method="post" enctype="multipart/form-data">
          <input type="text" id="staff_name" name="name" placeholder="Name" autocomplete="off" required>
          <span id="staff_name_error"></span>
          <input type="text" name="work" placeholder="Designation" autocomplete="off" required>
          <input type="number" id="staff_mobile_no" name="mobile_no" placeholder="PhoneNo" autocomplete="off" required>
          <span id="staff_mobile_no_error"></span>
          <input type="text" name="skills" placeholder="skills / teaching areas" autocomplete="off" required>
          <input type="email" id="staff_email" name="address" placeholder="Email" required>
          <span id="staff_email_error"></span>
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
               <h2><i class="heading-icon  fas fa-id-badge"></i>Staff profile</h2>
           </div>
            <?php
            
            if($_SESSION['login'] == $login_staff_session)
            {
                
            ?>    
            
           <div id="res" class="staff-btn col">
                <input id="search-bar" class="find" type="text" placeholder="search" name="search">
                <input id="search-btn" class="find" type="button" value="Search" name="search-btn">
            </div>
            <div class="staff-btn">
                <input id="insert" type="button" value="Insert Profile" name="insert">
            </div>  
              
                
            <?php        
            }
            
            ?>
        </section>
        
        
        <section class="profile row" id="staff_profile">
        
        <!-- here come the data -->
            <div class="pro col" id="staff_profile">
              
<!--
               <div class="profile-pic span-1-of-3">
                   <img src="../images/164995.jpg" alt="profile-img">
                   <p><strong>Nami</strong></p>
                   <em>&#40;straw hat pirate navigator&#41;</em>
               </div>
               
                <div class="span-2-of-3 profile-desc">
                    <div class="tab col">
                        <button class="act">description</button>
                        <button>details</button>
                        <button>skill</button>
                        <div class="staff-more col">
                            <button><i class="icon-more ion-md-more"></i></button>
                            <div class="staff-more-option">
                                <ul class="col">
                                    <li><a href="#"><i class="icon-more ion-md-create"></i>update</a></li>
                                    <li><a href="#"><i class="icon-more ion-md-trash"></i>delete</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
                        </p>
                    </div>
                    
                </div>
-->

            </div>
            
            
        </section>
<!--
        <div class="pagination">
            <div class="pages">
                <div class="prev-link">
                    prev    
                </div>
                <div class="links">1</div>
                <div class="links">2</div>
                <div class="links">3</div>
                <div class="next-link">
                    next    
                </div>
            </div>

        </div>
-->
        
        <script>
        
            $(document).ready(function(){
                
                
               setTimeout(function(){
                  fetchdata(); 
               }, 1000);
                
                function fetchdata(page){
                    $.ajax({
                        url:'../php/staff_profile_process.php',
                        data:{page:page},
                        type:'POST',
                        success:function(data){
                            $('#staff_profile').html(data);
                        }
                    });
                }
                
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
                    fetchdata(page);
                });
                
                $(document).on('click','.next-link',function(){
                    
                    var page = $(this).attr('rel');
                    page++;
                    fetchdata(page);
                });
                
                $('#insert').on('click',function(){
                    $('.black-screen').show();
                    $('body').css({overflowY:'hidden'});
                    $('.staff-profile-insert-card').show();
                    $('section').css({"filter":"blur(2px)"});
                    $('header').css({"filter":"blur(2px)"});
                });
                
                $('.black-screen').on('click', function(){
                    $('.staff-profile-insert-card').hide();
                    $('.form-card')[0].reset();
                    $('section').css({"filter":"blur(0px)"});
                    $('header').css({"filter":"blur(0px)"});
                    $('.black-screen').hide();
                    $('body').css({overflowY:'auto'});
                    $('#staff_id_error').html("");
                    $('#staff_image_error').html("");
                    $('#staff_name_error').html("");
                    $('#staff_mobile_no_error').html("");
                    $('#staff_email_error').html("");
                    $('.staff-profile-update-card').hide();
                    $('.form-card')[1].reset();
                    $('#staff_update_name_error').html("");
                    $('#staff_update_mobile_no_error').html("");
                    $('#staff_update_image_error').html("");
                    $('#staff_update_email_error').html("");
                    
                });
                
                $('#cancel-btn').click(function(){
                    $('.staff-profile-insert-card').hide();
                    $('body').css({overflowY:'auto'});
                    $('.black-screen').hide();
                    $('.form-card')[0].reset();
                    $('#staff_id_error').html("");
                    $('#staff_image_error').html("");
                    $('#staff_name_error').html("");
                    $('#staff_mobile_no_error').html("");
                    $('#staff_email_error').html("");
                    $('section').css({"filter":"blur(0px)"});
                    $('header').css({"filter":"blur(0px)"});
                });
                
                $(document).on('click','.staff_profile_update',function(){
                    
                    $('section').css({"filter":"blur(2px)"});
                    $('header').css({"filter":"blur(2px)"});
                    
                });
                
                $(document).on('click','#update-cancel-btn',function(){
                    $('section').css({"filter":"blur(0px)"});
                    $('header').css({"filter":"blur(0px)"});
                });
                
                $('#search-btn').click(function(){
                   var search= $('#search-bar').val();
                    
                    $.ajax({
                       
                        url:'../php/staff_profile_process.php',
                        data:{search:search},
                        type:'POST',
                        success:function(data){
                            $('#staff_profile').html(data);
                        },
                        complete:function(){
                            $('#search-bar').val('');
                        }
                        
                    });
                    
                    
//                    $('#search-bar').val('');
                });
                
                $('.form-card').submit(function(event){
                    event.preventDefault();
                    
                    var postData = new FormData(this);
                    var url = $(this).attr('action');
                    
                    $.ajax({
                        
                        url:url,
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
                                    $('.form-card')[0].reset();
                                    $('#staff_id_error').html("");
                                    $('#staff_image_error').html("");
                                    $('#staff_name_error').html("");
                                    $('#staff_mobile_no_error').html("");
                                    $('#staff_email_error').html("");
                                    $('.staff-profile-insert-card').hide();
                                    setTimeout(fetchdata(),1000);
                                    $('section').css({"filter":"blur(0px)"});
                                    $('header').css({"filter":"blur(0px)"});
                                    $('.black-screen').hide();
                                    $('body').css({overflowY:'auto'});
                                    
                                }
                            else
                                {
                                    alert(data.status);
                                }
                            
                            
                        }
                        
                    });
                });
                
                $('input').blur(function(){
                    
                    $(this).val($.trim($(this).val()));
                });
                
                $('textarea').blur(function(){
                    
                    $(this).val($.trim($(this).val()));
                });
                
                $('#staff_id').keyup(function(){
                    
                    var id = $(this).val();
                   
                    $.ajax({
                        url: '../php/staff_profile_validate.php',
                        data:{id:id},
                        type:'POST',
                        success:function(data)
                        {
                            $('#staff_id_error').html(data);
                        }
                        
                    });
                    
                });
                
                $('#staff_name').keyup(function(){
                    
                    var name = $(this).val();
                    
                    
                    $.ajax({
                        
                        url:'../php/field_validator.php',
                        data:{name:name},
                        type:'POST',
                        success:function(data)
                        {
                            $("#staff_name_error").html(data);
                        }
                    });
                    
                });
                
                $('#staff_mobile_no').keyup(function(){
                    
                    var mobile_no = $(this).val();
                    
                    
                    
                    $.ajax({
                        
                        url:'../php/field_validator.php',
                        data:{mobile_no:mobile_no},
                        type:'POST',
                        success:function(data)
                        {
                            $("#staff_mobile_no_error").html(data);
                        }
                    });
                    
                });
                
                
                $('#staff_email').keyup(function(){
                    
                    var email = $(this).val();
                    
                    
                    
                    $.ajax({
                        
                        url:'../php/field_validator.php',
                        data:{email:email},
                        type:'POST',
                        success:function(data)
                        {
                            $("#staff_email_error").html(data);
                        }
                    });
                    
                });
                
                
                $(document).on('keyup','#staff_update_name',function(){
                    var name = $(this).val();
                    
                    
                    $.ajax({
                        
                        url:'../php/field_validator.php',
                        data:{name:name},
                        type:'POST',
                        success:function(data)
                        {
                            $("#staff_update_name_error").html(data);
                        }
                    });
                    
                });
                
                $(document).on('keyup','#staff_update_mobile_no',function(){
                    
                    var mobile_no = $(this).val();
                    
                    $.ajax({
                        
                        url:'../php/field_validator.php',
                        data:{mobile_no:mobile_no},
                        type:'POST',
                        success:function(data)
                        {
                            $("#staff_update_mobile_no_error").html(data);
                        }
                    });
                    
                });
                
                $(document).on('keyup','#staff_update_email',function(){
                    
                    var email = $(this).val();
                    
                    
                    
                    $.ajax({
                        
                        url:'../php/field_validator.php',
                        data:{email:email},
                        type:'POST',
                        success:function(data)
                        {
                            $("#staff_update_email_error").html(data);
                        }
                    });
                    
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
                            $('#staff_image_error').html(data);
                        }
                    });
                });
                
                
                
                $(document).on('submit','.staff-profile-update-card .form-card',function(event){
                event.preventDefault();
                var id =$(this).attr('rel');
                var formdata = new FormData(this);
                formdata.append('update','updateThis');
                formdata.append('id',id);


                $.ajax({

                    url:'../php/staff_profile_update.php',
                    data:formdata,
                    type:'POST',
                    contentType:false,
                    processData:false,
                    cache:false,
                    success:function(){
                        $('.staff-profile-update-card').hide();
                        $('#staff_update_name_error').html("");
                        $('#staff_update_mobile_no_error').html("");
                        $('#staff_update_image_error').html("");
                        $('#staff_update_email_error').html("");
                        setTimeout(fetchdata(),1000);
                        $('section').css({"filter":"blur(0px)"});
                        $('header').css({"filter":"blur(0px)"});
                        $('.black-screen').hide();
                        $('body').css({overflowY:'auto'});
                        alert("updated");
                    }

                });
            });
                
//                $('#file_to_update').change(function(){
//                    
//                    var postData = new FormData($('.form-card')[1]);
//                    
//                    $.ajax({
//                        url:'../php/staff_profile_image_validation.php',
//                        data:postData,
//                        type:'POST',
//                        contentType:false,
//                        processData:false,
//                        cache:false,
//                        success:function(data)
//                        {
//                            $('#staff_update_image_error').html(data);
//                        }
//                    });
//                });
//                
//                $('#update-cancel-btn').click(function(){
//                    $('.staff-profile-update-card').hide();
//                    $('.form-card')[1].reset();
//                    $('#staff_update_image_error').html("");
//                    $('body').css({overflowY:'auto'});
//                    $('.black-screen').hide();
//                });
                
                
                $(document).on('click','.staff_profile_delete',function(event){
                    event.preventDefault();
                    var data = $(this).attr('rel');

                    if(confirm("are you sure?"))
                        {
                            $.ajax({

                                url:'../php/staff_profile_delete.php',
                                data:{id:data},
                                type:'POST',
                                dataType:'json',
                                success:function(data)
                                {
                                    alert(data.status);
                                    setTimeout(fetchdata(),1000);
                                }

                            });
                        }
                });
            
                

                
                
                
            });
        </script>
        
        
        <?php
        include 'footer.php';
        ?>

    </body>
</html>