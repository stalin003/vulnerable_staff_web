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
       
       
       <div class="staff-profile-insert-card mentor-insert-card">
       
<!--
           <form class="form-card" action="#" method="post">
             
             <div id="teacher_or_mentor">
                 
                 <input class="fix-radio" type="radio" name="select-insertion" value="teacher" checked>Teacher
                 <input class="fix-radio" type="radio" name="select-insertion" value="mentor">Mentor
                 
             </div>
             
              <div class="selector-container">
                  <div class="teacher-container">
                      <select name="class">
                         <option>Select Class</option>
                          <option>AMCA</option>
                          <option>NMCA</option>
                          <option>DMCA</option>
                      </select>

                      <select name="teacher">
                         <option>Select Teacher</option>
                          <option>Lucy heartfilia</option>
                          <option>Nami</option>
                          <option>Rias</option>
                      </select>
                    <input type="submit" value="submit" name="submit">
                    <input class="cancel-btn" type="button" value="cancel">
                  </div>
              
                  <div class="mentor-container">

                      <select name="student-start">

                         <option>From roll no.</option>
                          <option>111703917107</option>
                          <option>111703917108</option>
                          <option>111703917109</option>
                      </select>

                      <select name="student-end">
                         <option>To roll no.</option>
                          <option>111703917107</option>
                          <option>111703917108</option>
                          <option>111703917109</option>
                      </select>

                      <select name="teacher">
                        <option>Select Mentor</option>
                          <option>Lucy heartfilia</option>
                          <option>Nami</option>
                          <option>Rias</option>
                      </select>
                    <input type="submit" value="submit" name="submit">
                    <input class="cancel-btn" type="button" value="cancel">


                  </div>
              </div>

           </form>
-->

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
       
       
       
       
       
       
       
       
       
        <?php
            include 'nav_and_more.php';
        ?>
        
        
        <section class="row">
           <div class="box head-text">
               <h2><i class="heading-icon fas fa-chalkboard-teacher"></i>Mentoring</h2>
           </div>
           
           
           <?php
            
            if($_SESSION['login'] == $login_staff_session)
            {
            ?>    
            
<!--
            <div class="sch-btn col">
                <input class="find" type="text" placeholder="search" name="search">
                <select name="class_college">
                   <option selected>Search by</option>
                   <option> Event name</option>
                   <option>Year</option>
                   <option>Class name</option>
                </select>
                
                
                <input class="find" type="button" value="Search" name="search-btn">
            </div>
-->
            <div class="staff-btn">
                <input id="insert" type="button" value="INSERT" name="insert">
            </div>        
                
                
            <?php    
            }
            
            
            ?>
            
        </section>
        
        <section class="event">
           <div class="line row">
               
            <div class="box mentor events row">
                
                
                
                <div class="mentors">
                    <div class="mentor-heading-format">
                        <div><h2>Mentors - &#40;</h2></div>
                        <div class="">
                            <select class="class-year" name="class" onchange="fetch_mentor_body()">
                              <option>AMCA</option>
                              <option>NMCA</option>
                              <option selected>DMCA</option>
                            </select>
                        </div>
                        <div>

                            <h2>&#41;</h2>
                        </div>
                    </div>
                    
                    <div class="timeline">
                       
<!--
                       <div class="timeline-divider"></div>
                       
                        <div class="timeline-cotainer right">
                            <div class="content">
                                <div class="class-teacher mentor-pic">
                                   <img src="../images/1564104390432601445d3a56c621ccahugh-jackman_sc_768x1024.png">

                                    <div class="teacher-name">
                                        <h4>Hugh Jackman <br> &#40;AMCA&#41;</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="timeline-cotainer timeline-circle left">
                            <div class="content student-content">
                                <ul>
                                    <li>111703917101</li>
                                    <li>111703917102</li>
                                    <li>111703917103</li>
                                    <li>111703917104</li>
                                    <li>111703917105</li>
                                    <li>111703917106</li>
                                    <li>111703917107</li>
                                    <li>111703917108</li>
                                    <li>111703917109</li>
                                    <li>111703917110</li>
                                    <li>111703917111</li>
                                </ul>
                            </div>
                        </div>
                        
                        
                        <div class="timeline-cotainer right">
                            <div class="content">
                                <div class="class-teacher mentor-pic">
                                   <img src="../images/1564104098460488145d3a55a20564awill-smith1.jpg">

                                    <div class="teacher-name">
                                        <h4>Will Smith <br> &#40;AMCA&#41;</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="timeline-cotainer timeline-circle left">
                            <div class="content student-content">
                                <ul>
                                    <li>111703917101</li>
                                    <li>111703917102</li>
                                    <li>111703917103</li>
                                    <li>111703917104</li>
                                    <li>111703917105</li>
                                    <li>111703917106</li>
                                    <li>111703917107</li>
                                    <li>111703917108</li>
                                    <li>111703917109</li>
                                    <li>111703917110</li>
                                    <li>111703917111</li>
                                </ul>
                            </div>
                        </div>
                        
                        
                        <div class="timeline-cotainer right">
                            <div class="content">
                                <div class="class-teacher mentor-pic">
                                   <img src="../images/15640908625287796425d3a21ee6958515634942482610209525d310768abde0600px-Dendi_DHS_2015.jpg">

                                    <div class="teacher-name">
                                        <h4>Dendi <br> &#40;AMCA&#41;</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="timeline-cotainer timeline-circle left">
                            <div class="content student-content">
                                <ul>
                                    <li>111703917101</li>
                                    <li>111703917102</li>
                                    <li>111703917103</li>
                                    <li>111703917104</li>
                                    <li>111703917105</li>
                                    <li>111703917106</li>
                                    <li>111703917107</li>
                                    <li>111703917108</li>
                                    <li>111703917109</li>
                                    <li>111703917110</li>
                                    <li>111703917111</li>
                                </ul>
                            </div>
                        </div>
-->
                        
                        
                        
                        
                    </div>
                    
                    
                    
                </div>     
                
                
                
                
                
                
                
                
                
                <h2>Class Teacher</h2>
                <div class="col">
                </div>
                
                <div class="teachers">
                    
<!--
                    <div class="class-teacher">
                       <img src="../images/15640908625287796425d3a21ee6958515634942482610209525d310768abde0600px-Dendi_DHS_2015.jpg">

                        <div class="teacher-name">
                            <h4>Dendi <br> &#40;AMCA&#41;</h4>
                        </div>
                    </div>

                    <div class="class-teacher">
                       <img src="../images/1564104098460488145d3a55a20564awill-smith1.jpg">

                        <div class="teacher-name">
                            <h4>Will Smith <br> &#40;NMCA&#41;</h4>
                        </div>
                    </div>

                    <div class="class-teacher">
                       <img src="../images/1564104390432601445d3a56c621ccahugh-jackman_sc_768x1024.png">

                        <div class="teacher-name">
                            <h4>Hugh Jackman <br> &#40;DMCA&#41;</h4>
                        </div>
                    </div>
-->
                </div>
                
            </div>
            
            
            
            
           </div>
            
            
            
        </section>
        
        
        
        <?php
        include 'footer.php';
        ?>
        
        
        <script src="../js/common.js"></script>
        
        <script>
        
            
            
            
            $(document).ready(function(){
                
                
               
                setTimeout(fetch_mentor, 1000);
                setTimeout(fetch_std_list, 1000);
                setTimeout(set_student_select,1500);
                setTimeout(fetch_mentor_body, 2000);
                setTimeout(fetch_class_teacher, 2000);

                
                
                
                
                
                $(document).on('change','#teacher_or_mentor',function(){
                    var selected_val = $("input[name='select-insertion']:checked").val();
                    
                    if(selected_val == 'teacher')
                        {
                            $('.teacher-container').animate({left:"0%"});
                            $('.mentor-container').animate({left:"100%"});
                            $('.right-t').removeAttr('required');
                            $('.left-t').attr('required',true);
                            
                        }
                    
                    if(selected_val == 'mentor')
                        {
                            $('.mentor-container').animate({left:"0"});
                            $('.teacher-container').animate({left:"-100%"});
                            $('.left-t').removeAttr('required');
                            $('.right-t').attr('required',true);
                        }
                    
                });
                
                
                
                
                $(document).on('change','.mentor-class',function(){
                   
                    var student_class = $('.mentor-class').val();
                    
                    $.ajax({
                    
                        url:'../php/mentor_student_list.php',
                        data:{std_class:student_class},
                        type:'POST',
                        success:function(data)
                        {
                            $('.std-class-for-mentor').html(data);
                        }

                    });
                    
                });
                
                
                $(document).on('submit','.mentor-insert-card .form-card',function(event){
                    event.preventDefault();
                    var data = $(this).serialize();
                    
                    $.ajax({
                        
                        url:'../php/mentors_insert.php',
                        data:data,
                        type:'POST',
                        success:function(data)
                        {
                            alert("inserted");
                        },
                        complete:function(){
                            setTimeout(fetch_mentor, 1000);
                            setTimeout(fetch_std_list, 1000);
                            setTimeout(set_student_select,1500);
                            setTimeout(fetch_mentor_body, 2000);
                            setTimeout(fetch_class_teacher, 2000);
                        }
                        
                    });
                });
                
                
                $(document).on('dblclick','.class-teacher',function(){
                    
                    $(this).children('.remove-class-teacher').css({display:"block"});
                    
                });
                
                
                $(document).on('dblclick','.mentor-pic',function(){
                    
                    $(this).children('.remove-class-mentor').css({display:"block"});
                    
                });
                
                $(document).on('click','.rm-mct',function(){
                    
                    var rm_id = $(this).attr('rel');
                    
                    if(confirm("Are you sure?"))
                        {
                            $.ajax({
                        
                                url:'../php/remove_class_teacher.php',
                                data:{rm_id:rm_id},
                                type:'POST',
                                success:function(data)
                                {
                                    alert("deleted");
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_mentor, 1000);
                                    setTimeout(fetch_std_list, 1000);
                                    setTimeout(set_student_select,1500);
                                    setTimeout(fetch_mentor_body, 2000);
                                    setTimeout(fetch_class_teacher, 2000);
                                }

                            });
                        }
                });
                
                
                $(document).on('click','.rm-mcm',function(){
                    
                    var mentor_rm_id = $(this).attr('rel1');
                    var student_rm_id = $(this).attr('rel2');
                    
                    if(confirm("Are you sure?"))
                        {
                            $.ajax({
                        
                                url:'../php/mentor_delete.php',
                                data:{mentor_rm_id:mentor_rm_id, student_rm_id:student_rm_id},
                                type:'POST',
                                success:function(data)
                                {
                                    alert('deleted');
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_mentor, 1000);
                                    setTimeout(fetch_std_list, 1000);
                                    setTimeout(set_student_select,1500);
                                    setTimeout(fetch_mentor_body, 2000);
                                    setTimeout(fetch_class_teacher, 2000);
                                }

                            });
                        }
                    
                });
                
                
                
            });
            
            
            
            function fetch_mentor(){
                
                $.ajax({
                    
                    url:'../php/mentors_process.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.mentor-insert-card').html(data);
                    }
                    
                });
                
                
            };
            
            
            function fetch_std_list(){
                
                $.ajax({
                    
                    url:'../php/mentor_student_list.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.std-class-for-mentor').html(data);
                    }

                });
                
            }
            
            function set_student_select(){
                $('.std-class-for-mentor').html("<option value=''>From roll no.</option>");
                $('.std-class-for-mentor-to').html("<option value=''>To roll no.</option>");
            }
            
            
            function fetch_mentor_body(){
                
                var data = $('select.class-year').val();
                
                $.ajax({
                    
                    url:'../php/mentors_process_body.php',
                    data:{data:data},
                    type:'POST',
                    success:function(data)
                    {
                        $('.timeline').html(data);
                    }
                    
                });
                
            }
            
            
            function fetch_class_teacher(){
                
                $.ajax({
                    
                    url:'../php/mentors_process_teacher.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.teachers').html(data);
                    }
                    
                });
            }
            
            
            
            
        
        </script>
        
        
        
        
        
        
        
        
        
    </body>
</html>




























