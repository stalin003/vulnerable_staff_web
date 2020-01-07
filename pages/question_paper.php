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
       <div class="staff-profile-insert-card question-paper-external-insert-card">
       
       <form class="form-card" action="#" method="post" enctype="multipart/form-data">
         <select class="qpaper-year" name="question_paper_year" onchange="fetch_question_paper_sem()" required>
             <option value="" selected>Select Year</option>
         </select>
         
        <select class="qpaper-sem" name="question_paper_sem" required>
             <option value="" selected>Select Sem</option>
         </select>
          <input type="file" id="file_to_upload" name="qpaper" accept="application/pdf" placeholder="Select File" required>
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
               <h2><i class="heading-icon fas fa-graduation-cap"></i>Question Papers</h2>
           </div>
           
           <?php
            
            if($_SESSION['login'] == $login_staff_session)
            {
            ?>
                
                <div class="staff-btn">
                    <input id="insert" type="button" value="Insert Profile" name="insert">
                </div>
            
            <?php        
            }
            
            ?>
           
            
        </section>
        
        
        <section class="row pad-fix">
        <div class="row Question-papers">
            
<!--
            <div class="question-paper-year">
                <div class="paper-callapse">
                    <h3>2019 papers</h3>
                    <i class="fas fa-plus"></i>
                </div>
                
                <div class="sub-paper">
                    <div class="papers">
                       <p>Sem &mdash; 1</p>
                        <ul>
                            <li>all subjects &mdash; <a href="../question_papers/DM%20Seminar%20Questions.pdf">sem-1 papers</a></li>
                        </ul>
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
                
                setTimeout(fetch_question_paper_year(),1000);
                setTimeout(fetch_question_paper_sem(),1000);
                setTimeout(fetch_question_paper(),1000);
                
                $(document).on('click','.paper-callapse',function(){
                    
                    
                    var collapsePaper = $(this).children('.fas');
                    var collapseForm = $(this).siblings('.sub-paper');
                    
                    collapsePaper.toggleClass('fa-plus');
                    collapseForm.toggle();
                    
                    if(!collapsePaper.hasClass('fa-plus'))
                        {
                            collapsePaper.addClass('fa-minus');
                        }
                    else
                        {
                            collapsePaper.removeClass('fa-minus');
                        }
                });
                
                
                
                $('.question-paper-external-insert-card .form-card').submit(function(event){
                    
                    event.preventDefault();
                    
                    var data = new FormData(this);
                    
                    
                    $.ajax({
                        
                        url:'../php/question_paper_insert.php',
                        data:data,
                        type:'POST',
                        contentType:false,
                        processData:false,
                        cache:false,
                        success:function(data)
                        {
                            alert('inserted');
                            
                            $('.question-paper-external-insert-card .form-card')[0].reset();

                            $('.question-paper-external-insert-card').hide();
                            $('body').css({overflowY:'auto'});
                            $('.black-screen').hide();
                            $('section').css({"filter":"blur(0px)"});
                            $('header').css({"filter":"blur(0px)"});
                        },
                        complete:function()
                        {
                            setTimeout(fetch_question_paper(),1000);
                        }
                        
                    });
                    
                    
                    
                });
                
                
                $(document).on('click','#paper-delete',function(){
                    
                    var paper_id = $(this).attr('rel');
                    
                    if(confirm("Are you sure?"))
                        {
                            $.ajax({
                        
                                url:'../php/question_paper_delete.php',
                                data:{paper_id:paper_id},
                                type:'POST',
                                success:function(data)
                                {
                                    alert('deleted');
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_question_paper(),1000);
                                }

                            });
                        }
                    
                });
                
                
            });
            
            
            function fetch_question_paper_year()
            {
                $.ajax({
                    
                    url:'../php/question_paper_year.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.qpaper-year').append(data);
                    }
                    
                });
            }
            
            
            function fetch_question_paper_sem()
            {
                
                var sem_year = $('.qpaper-year').val();
                
                
                $.ajax({
                    
                    url:'../php/question_paper_sem.php',
                    type:'POST',
                    data:{year:sem_year},
                    success:function(data)
                    {
                        $('.qpaper-sem').html(data);
                    }
                    
                });
            }
            
            function fetch_question_paper()
            {
                
                $.ajax({
                    
                    url:'../php/question_paper_process.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.Question-papers').html(data);
                    }
                    
                });
                
            }
            
            
        </script>

    </body>
</html>






























