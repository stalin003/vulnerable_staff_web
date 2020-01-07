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
     
<!--     <div class="tst"></div>-->
      
       
      <div class="staff-profile-insert-card student-profile-insert-card">
       
           <form class="form-card" action="../php/staff_profile_insert.php" method="post" enctype="multipart/form-data">
              <input type="number" id='std_id' name="roll_no" placeholder="Roll No." required>
              <span class="std-id-error"></span>
              <input type="text" id='std_name_d' name="fname" placeholder="Full Name" required>
              <span id="std-name-error"></span>
              <select class="local_nri" name="local_nri" required>
                  <option value="local" selected>Local</option>
                  <option value="nri">Other State/NRI</option>
              </select>
              <span class="nri"></span>
              <input type='text' id='std_caste' placeholder="Caste" name="caste">
              <span id="std-caste-error"></span>
              <input type='text' id='std_religion' placeholder="Religion" name="religion">
              <span id="std-religion-error"></span>
              <input type="number" id='std_mobile_no' name="mobile_no" placeholder="PhoneNo">
              <span id="std-mobile-no-error"></span>
              <input type="email" id='std_email' name="email" placeholder="Email">
              <span id="std-email-error"></span>
              <input type="radio" name="gender" value="male" checked>Male
              <input type="radio" name="gender" value="female">Female
              <input type="radio" name="gender" value="others" >Others
              <input type="text" name="remarks" placeholder="Remarks">
              <input type="file" id="file_to_upload" name="profile_pic" accept="image/jpeg,image/png" placeholder="Upload Pic">
              <span id="staff_image_error"></span>
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
               <h2><i class="heading-icon fas fa-user-graduate"></i>Profile</h2>
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
        
        
        <section class="row student student-fix">
            <div>
               
                <table class="student-table">
                    <div class="student-caption"><div><b>Students of - </b></div><div class="student-class">
                      
                      <select class="class-year" name="class" onchange="fetch_student_onchange(1)">
                          <option>AMCA</option>
                          <option>NMCA</option>
                          <option selected>DMCA</option>
                      </select>
                       
                   </div></div>
<!--
                    <div>
                        <tr>
                            <th>Image</th>
                            <th>Roll no</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Operation</th>
                        </tr>
                    </div>
-->
                    <div class="student-list">
<!--
                        <tr>
                            <td><img class="td-img" src="../images/270187.jpg" alt="naruto_pic"></td>
                            <td>111703917107</td>
                            <td>naruto</td>
                            <td>male</td>
                            <td>24/04/1996</td>
                            <td>alwal,bhoodevi nagar, sec-bad 500015</td>
                            <td>8801634588</td>
                            <td>narutouzumaki003@hotmail.com</td>
                            <td><i class="icon-table fas fa-user-edit"></i>
                            <i class="icon-table fas fa-trash"></i></td>
                        </tr>
-->
                    </div>
                </table>
                
            </div>
            
        </section>
        
        
        
        <?php
        include 'footer.php';
        ?>
        
        <script src="../js/common.js"></script>
        <script>
        
                $(document).ready(function(){
                    
                    setTimeout(auto_update_student,1000);
                    setTimeout(fetch_student,1000);
                    
                    
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
                        fetch_student_onchange(page);
                    });

                    $(document).on('click','.next-link',function(){

                        var page = $(this).attr('rel');
                        page++;
                        fetch_student_onchange(page);
                    });
                    
                    
                   
                    $('.student-profile-insert-card .form-card').submit(function(event){
                    event.preventDefault();
                    var data = new FormData(this);
                    
                    
                    $.ajax({
                        
                            url:"../php/student_profile_insert.php",
                            data:data,
                            type:'POST',
                            contentType:false,
                            processData:false,
                            cache:false,
                            dataType:'json',
                            success:function(data)
                            {
                                if(data.status == "success")
                                    {
                                        $('.tst').html(data);
                                        alert("uploaded");
                                        $('.student-profile-insert-card .form-card')[0].reset();
                                        $('.nri').html("");
                                        $('.student-profile-insert-card').hide();

                                        $('body').css({overflowY:'auto'});
                                        $('.black-screen').hide();
                                        $('section').css({"filter":"blur(0px)"});
                                        $('header').css({"filter":"blur(0px)"});
                                    }
                                else
                                    {
                                        alert(data.status);
                                    }
                                
                                


                            },
                            complete:function()
                            {
                                setTimeout(fetch_student_onchange,1000);
                            }
                        
                        
                        });
                    
                    
                    });
                    
                    
                    
                    
                    $('#std_id').keyup(function(){
                    
                        var id = $(this).val();

                        $.ajax({
                            url: '../php/student_profile_validate.php',
                            data:{id:id},
                            type:'POST',
                            success:function(data)
                            {
                                $('.std-id-error').html(data);
                            }

                        });

                    });
                    
                    $('#std_name_d').keyup(function(){
                    
                        var name = $(this).val();


                        $.ajax({

                            url:'../php/field_validator.php',
                            data:{name:name},
                            type:'POST',
                            success:function(data)
                            {
                                $("#std-name-error").html(data);
                            }
                        });
                    
                    });
                    
                    $('#std_caste').keyup(function(){
                    
                        var string_validate = $(this).val();


                        $.ajax({

                            url:'../php/field_validator.php',
                            data:{string_validate:string_validate},
                            type:'POST',
                            success:function(data)
                            {
                                $("#std-caste-error").html(data);
                            }
                        });
                    
                    });
                    
                    $('#std_religion').keyup(function(){
                    
                        var string_validate = $(this).val();


                        $.ajax({

                            url:'../php/field_validator.php',
                            data:{string_validate:string_validate},
                            type:'POST',
                            success:function(data)
                            {
                                $("#std-religion-error").html(data);
                            }
                        });
                    
                    });
                    
                    $('#std_mobile_no').keyup(function(){
                    
                        var mobile_no = $(this).val();



                        $.ajax({

                            url:'../php/field_validator.php',
                            data:{mobile_no:mobile_no},
                            type:'POST',
                            success:function(data)
                            {
                                $("#std-mobile-no-error").html(data);
                            }
                        });

                    });
                    
                    $('#std_email').keyup(function(){
                    
                        var email = $(this).val();



                        $.ajax({

                            url:'../php/field_validator.php',
                            data:{email:email},
                            type:'POST',
                            success:function(data)
                            {
                                $("#std-email-error").html(data);
                            }
                        });

                    });
                    
                    
                    
                    $(document).on('click','#student-delete',function(){
                        
                        var id = $(this).attr('rel');
                        
                        if(confirm("Are you sure?"))
                            {
                                $.ajax({

                                    url:'../php/student_delete.php',
                                    type:'POST',
                                    data:{id:id},
                                    success:function()
                                    {
                                        alert('deleted');

                                    },
                                    complete:function()
                                    {
                                        setTimeout(fetch_student_onchange,1000);
                                    }



                                });
                            }
                    });
                    
                    
                    $('.local_nri').change(function(){
                        var check_local = $(this).val();
                        if(check_local == "nri")
                            {
                                $('.nri').html("<input type='text' placeholder='Other State/NRI' name='nri' required>");
                            }
                        else
                            {
                                $('.nri').html("");
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
                                $('#staff_image_error').html(data);
                            }
                        });
                    });
                    
                    
                    
                    
                });
            
            
            function fetch_student_onchange(page)
            {
                var data = $('select.class-year').val();
                
                $.ajax({
                    
                    url:"../php/student_process.php",
                    type:'POST',
                    data:{data:data,page:page},
                    success:function(data)
                    {
                        $('.student-list').html(data);
                    }
                    
                });
            }
            
            function fetch_student()
            {
                var data = $('select.class-year').val();
                
                $.ajax({
                    
                    url:"../php/student_process.php",
                    type:'POST',
                    data:{data:data},
                    success:function(data)
                    {
                        $('.student-list').html(data);
                    }
                    
                });
            }
            
            
            function auto_update_student()
            {
                $.ajax({
                    
                    url:"../php/student_auto_update.php",
                    type:'POST',
                    success:function(data)
                    {
                        
                    }
                    
                });
            }
            
            
        
        
        </script>
        
    </body>
</html>






























