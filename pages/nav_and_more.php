<?php


include '../php/session_variables.php';

?>

<div class="logout-card">
          
   <div class="card">
       <p>are your sure&#63;</p>
       <input id="yes" type="button" value="yes">
       <input id="no" type="button" value="no">
   </div>
</div>

<div class="password-card">

   <div class="pass-card">
       <p><b>Change password</b></p>
       <form class="chng-pass" action="#" method="post">
           <input type="password" placeholder="current password" name="cur_pass" required>
           <input type="password" placeholder="new password" name="new_pass" required>
           <input type="password" placeholder="confirm password" name="con_pass" required>
           <input type="submit" value="confirm">
           <input id="cancel" class="cancel-btn" type="button" value="cancel">
       </form>
   </div>
</div>
   
<div class="username-card">

   <div class="user-card">
       <p><b>Change username</b></p>
       <form class="chng-user" action="#" method="post">
           <input type="text" placeholder="new username" name="new_usr" required>
           <input type="password" placeholder="password" name="cur_pass" required>
           <input type="submit" value="confirm">
           <input id="cancel-usr" class="cancel-btn" type="button" value="cancel">
       </form>
   </div>
</div>

<div class="black-screen">

</div>
<header class="nav-background col">

    <div class="row">
        <div class="col">
            <img id="logo" src="../css/images/logo.png">
            <div class="universal-more">
                <i class="universal-more-icon fas fa-ellipsis-v"></i>
            </div>
            <div class="cog test col">
                <a href="#">More <i class="fas fa-cog setting"></i></a>

                <div class="sub-menu">
                    <ul>
                       
                       <?php
                
                        if($_SESSION['login'] == $login_staff_session)
                        {

                        ?>
                       
                       
                        <li id="change-username"><a href="#">change username</a></li>
                        <li id="change-password"><a href="#">change password</a></li>
                        
                        <?php
                        }
                        
                        ?>
                        <li id="logout"><a href="#">log out</a></li>
                    </ul>
                </div>    
            </div>


        </div>


        <div class="navbar col">
            <ul>
                <!---------------------->
                <!--Home           ----->
                <!---------------------->

                <li>
                    <div class="test col">
                        <a href="home.php">Home</a>
                    </div>
                </li>

                <!---------------------->
                <!--Staff          ----->
                <!---------------------->
                <li>
                    <div class="test col">
                        <a href="javascript:void(0)">Staff</a>
                        <i class="fas fa-caret-down icon"></i>
                        <div class="sub-menu col">
                            <ul>
                                <li><a href="staff_profile.php">Profiles</a></li>
<!--                                <li><a href="staff_time_table.php">Time Table</a></li>-->
                            </ul>
                        </div>
                    </div>
                </li>

                <!---------------------->
                <!--Students       ----->
                <!---------------------->

                <?php
                
                if($_SESSION['login'] == $login_staff_session)
                {
                    
                ?>
                  
                <li>
                    <div class="test col">
                        <a href="javascript:void(0)">Students</a>
                        <i class="fas fa-caret-down icon"></i>
                        <div class="sub-menu col">
                            <ul>
                                <li>
                                    <div class="test2 col">
                                        <a href="student_profile.php">Profiles</a>
<!--
                                        <i class="fas fa-caret-right icon"></i>
                                        <div class="sub-menu2 col">
                                            <ul>
                                                <li><a href="student_profile.php">AMCA</a></li>
                                                <li><a href="student_profile.php">NMCA</a></li>
                                                <li><a href="student_profile.php">DMCA</a></li>
                                            </ul>
                                        </div>
-->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>  
                   
                
                <?php           
                    
                }
                
                
                ?>

                <!---------------------->
                <!--Alumni         ----->
                <!---------------------->

                <?php
                
                if($_SESSION['login'] == $login_staff_session)
                {
                ?>    
                    
                    <li>
                        <div class="test col">
                            <a href="alumini.php">Alumini</a>
                        </div>
                    </li>
                
                <?php        
                }
                
                
                ?>

                <!------------------------->
                <!--Informal$#92 Cultural-->
                <!------------------------->

                <li>
                    <div class="test col">
                        <a href="javascript:void(0)">Informal&#92;Cultural</a>
                        <i class="fas fa-caret-down icon"></i>
                        <div class="sub-menu col">
                            <ul>
                                <li><a href="events.php">Events&#92;Planet</a></li>
<!--
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="#">Reports</a></li>
-->
                            </ul>
                        </div>
                    </div>
                </li>

                <!---------------------->
                <!--Guest Lecutrers----->
                <!---------------------->

                <li>
                    <div class="test col">
                        <a href="guest_lecturer.php">Guest lecturers</a>
                    </div>
                </li>

                <!---------------------->
                <!--Industrial Visit --->
                <!---------------------->

                <li>
                    <div class="test col">
                        <a href="industrial_visit.php">Industrial Visit</a>
                    </div>
                </li>

                <!---------------------->
                <!--Fromal Events  ----->
                <!---------------------->

<!--
                <li>
                    <div class="test col">
                        <a href="#">Formal Events</a>
                    </div>
                </li>
-->

                <!---------------------->
                <!--Lab            ----->
                <!---------------------->

<!--
                <li>
                    <div class="test col">
                        <a href="#">Lab</a>
                        <i class="fas fa-caret-down icon"></i>
                        <div class="sub-menu col">
                            <ul>
                                <li><a href="#">Time Table</a></li>
                                <li><a href="#">Infrastructure</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
-->

                <!---------------------->
                <!--Placement      ----->
                <!---------------------->

                <li>
                    <div class="test col">
                        <a href="javascript:void(0)">Placement</a>
                        <i class="fas fa-caret-down icon"></i>
                        <div class="sub-menu col">
                            <ul>
                                <li><a href="placement.php">Details</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!---------------------->
                <!--MCA Infrastructure-->
                <!---------------------->

<!--
                <li>
                    <div class="test col">
                        <a href="#">MCA Infrastructure</a>
                    </div>
                </li>
-->

                <!------------------------->
                <!--Time Table&#92;Alumnax->
                <!------------------------->

<!--
                <li>
                    <div class="test col">
                        <a href="#">Time Table&#92;Alumnax</a>
                    </div>
                </li> 
-->

                <!------------------------->
                <!--Library            ---->
                <!------------------------->

<!--
                <li>
                    <div class="test col">
                        <a href="library.php">Library</a>
                    </div>
                </li>
-->

                <!---------------------->
                <!--Staff Meetings   --->
                <!---------------------->

<!--
                <li>
                    <div class="test col">
                        <a href="#">Staff Meetings</a>
                        <i class="fas fa-caret-down icon"></i>
                        <div class="sub-menu col">
                            <ul>
                                <li><a href="#">Departmental Meeting</a></li>
                                <li><a href="#">College</a></li>
                                <li><a href="#">BOS</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
-->

                <!---------------------->
                <!--Mentoring        --->
                <!---------------------->

                <li>
                    <div class="test col">
                        <a href="mentors.php">Mentoring</a>
                    </div>
                </li>

                <!---------------------->
                <!--Question Papers  --->
                <!---------------------->

                <li>
                    <div class="test col">
                        <a href="javascript:void(0)">Question Papers</a>
                        <i class="fas fa-caret-down icon"></i>
                        <div class="sub-menu col">
                            <ul>
<!--                                <li><a href="#">Internal</a></li>-->
                                <li><a href="question_paper.php">External</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!---------------------->
                <!--Sports           --->
                <!---------------------->

<!--
                <li>
                    <div class="test col">
                        <a href="sports.php">Sports</a>
                    </div>
                </li>
-->

                <!------------------------------>
                <!--Academic Counsil&#92;BOS --->
                <!------------------------------>

<!--
                <li>
                    <div class="test col">
                        <a href="#">Academic Counsil&#92;BOS</a>
                    </div>
                </li>
-->
                
                <li>
                    <div class="test col">
                        <a href="../pages/Online_Lecture.php">Online Lectures</a>
                    </div>
                </li>

            </ul>



        </div>
    </div>

</header>


<script>
    $(document).ready(function(){
        
        $('.cancel-btn').click(function(){
            
            $('.chng-pass')[0].reset();
        })
        
        
        $('.chng-pass').submit(function(event){
            
            
            event.preventDefault();
            var data = $(this).serialize();
            
            $.ajax({
                
                url:'../php/change_password.php',
                data:data,
                type:'POST',
                dataType:'json',
                success:function(data)
                {
                    if(data.status == "success")
                        {
                            alert("password changed successfully");
                            $('.chng-pass')[0].reset();
                            
                        }
                    else
                        {
                            alert(data.status);
                        }
                }
                
            });
            
            
        });
        
        $('.chng-user').submit(function(event){
            
            
            event.preventDefault();
            var data = $(this).serialize();
            
            
            $.ajax({
                
                url:'../php/change_username.php',
                data:data,
                type:'POST',
                dataType:'json',
                success:function(data)
                {
                    if(data.status == "success")
                        {
                            alert("username changed successfully");
                            $('.chng-user')[0].reset();
                            
                        }
                    else
                        {
                            alert(data.status);
                        }
                }
                
            });
            
            
        });
        
        
        $('.black-screen').on('click', function(){
            $('.username-card').hide();
            $('.chng-user')[0].reset();
        });
        
        
        
    })

</script>
































