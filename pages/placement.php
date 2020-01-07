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
       
       
       <div class="staff-profile-insert-card placement-insert-card">
       
           <form class="form-card" action="#" method="post">
             
             <select name="roll_number" class="place-select-roll" required>
                   <option selected value="">roll no</option>
                </select>
              <input type="text" name="cname" placeholder="Company Name" required>
              <input type="number" name="salary" placeholder="Salary Per Anum" step="0.01" min="1" max="20">
<!--              <input type="text" name="position" placeholder="Position" required>-->
              <select class="pcs" name="campus-selection" required>
                 <option selected value="">Select in/out Campus</option>
                  <option>In Campus</option>
                  <option>Out Campus</option>
              </select>
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
       
       
       
       
        <?php
            include 'nav_and_more.php';
        ?>
        
        
        <section class="row">
           <div class="box head-text">
               <h2><i class="heading-icon fas fa-globe-asia"></i>Placement &mdash; Details</h2>
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
                    
            <?php    
            }
            
            
            ?>
            
        </section>
        
        
        <section class="row">
        
        <div class="placement-cell place-rel">
         
         <div class="select-placement-year">
             <select class="placement-year" onchange="fetch_placed_student()">
                 <option selected>default</option>
                 
             </select>
         </div>
          
          <div class="box placement-heading placement-select">
              <h2>Top - 10 placed student</h2>
              <div>
                  
                  <select class="campus-selecttion" name="campus-selection" onchange="fetch_placed_student()">
                      <option selected>In Campus</option>
                      <option>Out Campus</option>
                  </select>
                  
              </div>
          </div>
          
          
           <div class="placement-list">
               <div class="placement-container placed-profile-container">
                
<!--
                    <div class="placement-profile">

                        <div class="placement-profile-pic">
                            <div class="placement-pic">
                                <img src="../images/15640916758133589455d3a251b3db3d15634968449411629175d31118c1c151adult-competition-concentration-929831.jpg" alt="profile_pic">
                            </div>
                            <span><p>nami</p></span>
                        </div>

                        <div class="placement-details">
                            <h4>Google</h4>
                            <h4>Software Engineer</h4>
                            <p>1.8L anum</p>
                            <p>2019 batch</p>
                            <div class="placement-more">
                                <i class="placement-icon fas fa-user-edit"></i>
                                <i class="placement-icon fas fa-trash-alt"></i>
                            </div>
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
        
        
        <script type="text/javascript" src="../js/common.js"></script>
        
        <script>
        
            
            $(document).ready(function(){
                
                setTimeout(fetch_placement_roll_no(),1000);
                setTimeout(fetch_placement_year(),1000);
                setTimeout(fetch_placed_student(),1000);
                
                
                
                
                $('.placement-insert-card .form-card').submit(function(event){
                    
                    event.preventDefault();
                    
                    var data = $(this).serialize();
                    
                    $.ajax({
                        
                        url:'../php/placement_insert.php',
                        data:data,
                        type:'POST',
                        dataType:'json',
                        success:function(data)
                        {
                            if(data.status == "success")
                                {
                                    alert("inserted");
                            
                                    $('section').css({"filter":"blur(0px)"});
                                    $('header').css({"filter":"blur(0px)"});
                                    $('.placement-insert-card').hide();
                                    $('.black-screen').hide();
                                    $('.placement-insert-card .form-card')[0].reset();
                                    setTimeout(fetch_placement_roll_no(),1000);
                                    setTimeout(fetch_placement_year(),1000);
                                    setTimeout(fetch_placed_student(),1000);
                                }
                            else
                                {
                                    alert(data.status);
                                }
                            
                        }
                        
                        
                    });
                    
                });
                
                $(document).on('click','.placement-icon',function(){
                    
                    var id = $(this).attr('rel');
                    
                    if(confirm("are you sure?"))
                        {
                            $.ajax({
                                
                                url:'../php/placement_delete.php',
                                data:{id:id},
                                type:'POST',
                                dataType:'json',
                                success:function(data)
                                {
                                    if(data.status == "success")
                                        {
                                            alert("deleted");
                                            setTimeout(fetch_placement_roll_no(),1000);
                                            setTimeout(fetch_placement_year(),1000);
                                            setTimeout(fetch_placed_student(),1000);
                                            
                                        }
                                    else
                                        {
                                            alert(data.status);
                                        }
                                }
                                
                            });
                        }
                })
                
                
                
                
            });
            
            function fetch_placement_year()
            {
                $.ajax({
                    
                    url:'../php/placement_select_year.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.placement-year').append(data);
                    }
                    
                });
            }
            
            function fetch_placement_roll_no()
            {
                $.ajax({
                    
                    url:'../php/placement_select_roll.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.place-select-roll').append(data);
                    }
                    
                });
            }
            
            function fetch_placed_student()
            {
                var searchData = $('.campus-selecttion').val();
                var searchYear = $('.placement-year').val();
                
                $.ajax({
                    
                    url:'../php/placement_process.php',
                    data:{searchData:searchData,searchYear:searchYear},
                    type:'POST',
                    success:function(data)
                    {
                        $('.placement-container').html(data);
                    }
                });
            }
        
        
        </script>
        
        
    </body>
</html>
































