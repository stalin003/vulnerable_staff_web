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
      <div class="staff-profile-insert-card event-insert-card">
       
       <form class="form-card" action="#" method="post">
          <input type="text" name="title" placeholder="Event Name" required>
          <textarea name="description" placeholder="Description" required></textarea>
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
        
        <div class="staff-profile-insert-card event-image-upload">
       
<!--
           <form class="form-card" action="#" method="post" enctype="multipart/form-data">
             <input type="file" id="file_to_upload" name="profile_pic" accept="image/jpeg,image/png" placeholder="Upload Pic" required>
              <input type="submit" value="submit" name="submit">
              <input class="cancel-btn" type="button" value="cancel">

           </form>
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
               <h2><i class="heading-icon fas fa-globe-asia"></i>Planet Program</h2>
           </div>
           
           <?php
            
            if($_SESSION['login'] == $login_staff_session)
            {
            ?>    
               
<!--
            <form class="sch-btn col">
                <input class="find find-fix" type="text" placeholder="search" name="search">
                <select name="class_college">
                   <option selected>Search by</option>
                   <option> Event name</option>
                   <option>Year</option>
                   <option>Class name</option>
                </select>
                
                
                <input class="find" type="submit" value="Search" name="search-btn">
            </form>
-->
            <div class="staff-btn">
                <input id="insert" type="button" value="INSERT" name="insert">
            </div>
                
                 
                   
                
            <?php    
            }
            
            ?>
            
        </section>
        
        <section class="event">
          
           <div class="line row" id="events">
               
<!--
            <div class="box events row page-more-setup" >
               <div class="page-more">
                 
                 <div class="more-page">
                     <button class=""><i class='icon-more fas fa-ellipsis-v'></i></button>
                     <div class="update-and-delete">
                          <ul>
                              <li class="upload-pics"><i class="icon-more common-icon-space fas fa-upload"></i>upload pics</li>
                              <li class="update"><i class='icon-more common-icon-space fas fa-user-edit'></i>update</li>
                              <li class="delete"><i class='icon-more common-icon-space fas fa-trash-alt'></i>delete</li>
                          </ul>
                      </div>
                 </div>
                 
                  
              </div>
               
               
               
                <h2>Anime parade</h2>
                <div class="col">
                    <em>uploaded data</em>
                </div>
                
                <div class="event-gallery">
                   <div class="col">
                        <div class="span-1-of-3 event-images">
                            <img src="../images/221245.png" alt="event_pics">
                        </div>
                        <div class="span-1-of-3 event-images">
                            <img src="../images/270187.jpg" alt="event_pics">
                        </div>
                        <div class="span-1-of-3 event-images">
                            <img src="../images/643477.jpg" alt="event_pics">
                        </div>
                        
                        <div class="span-1-of-3 event-images">
                            <img src="../images/164995.jpg" alt="event_pics">
                        </div>
                        <div class="span-1-of-3 event-images">
                            <img src="../images/643476.jpg" alt="event_pics">
                        </div>
                        <div class="span-1-of-3 event-images">
                            <img src="../images/660058.jpg" alt="event_pics">
                        </div>
                    </div>
                    
                </div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maiores, obcaecati possimus, porro vel veniam doloremque iure repudiandae et pariatur, aliquid cum consectetur exercitationem consequatur reprehenderit in quo quisquam, aperiam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, minus minima, obcaecati soluta quis facere, doloribus sequi sit dolorem quam illo ex? Eveniet animi aliquam magnam impedit optio sapiente corrupti! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum adipisci itaque maxime cumque quia! Nisi dignissimos, quae placeat, magnam ab laudantium. Ea consectetur autem velit dolore eius, veniam sed sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti mollitia ad qui ea nulla voluptatum fugit placeat dolorum perferendis repudiandae veniam odit blanditiis, amet voluptatem rem sequi facilis in enim. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quos dicta facere eveniet ullam veritatis dignissimos aut aliquam, qui repellat esse sunt velit. Repellat quod dolor, veritatis ipsum temporibus fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ad, tempore nobis labore. Assumenda veritatis cumque iure, architecto, ipsum nesciunt deleniti asperiores fuga. Animi consequuntur sequi recusandae corporis delectus odit.</p>
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
                        fetch_event(page);
                    });

                    $(document).on('click','.next-link',function(){

                        var page = $(this).attr('rel');
                        page++;
                        fetch_event(page);
                    });
                
                
                
                $('.event-insert-card .form-card').submit(function(event){
                    event.preventDefault();
                    var data = $(this).serialize();
                    
                    
                    $.ajax({
                        
                        url:"../php/event_insert.php",
                        data:data,
                        type:'POST',
                        success:function(data)
                        {
                            $('.event-insert-card .form-card')[0].reset();
                            
                            $('.event-insert-card').hide();
                            $('body').css({overflowY:'auto'});
                            $('.black-screen').hide();
                            $('section').css({"filter":"blur(0px)"});
                            $('header').css({"filter":"blur(0px)"});
                            
                            
                        },
                        complete:function()
                        {
                            setTimeout(fetch_event,1000);
                        }
                        
                        
                    });
                    
                    
                });
                
                setTimeout(function(){
                    fetch_event();
                },1000);
                
                
                
                $(document).on('submit','.event-image-upload .form-card',function(event){
                    event.preventDefault();
                    var id = $(this).attr('rel');
                    var postData = new FormData(this);
                    postData.append('id',id);
                    
                    
                    $.ajax({
                        
                        url:'../php/event_insert.php',
                        type:'POST',
                        data:postData,
                        contentType:false,
                        processData:false,
                        cache:false,
                        dataType:'json',
                        success:function(data)
                        {
                            
                            
                            
                            if(data.status == "success")
                                {
                                    $('.form-card')[1].reset();
                                    alert('uploaded');
                                    setTimeout(fetch_event,1000);
                                }
                            else
                                {
                                    alert(data.status);
                                }
                        }
                        
                    });
                    
                    
                });
                
                
                $(document).on('click','.delete-event',function(event){
                    
                    var id = $(this).attr('rel');
                    
                    if(confirm('Do u want to delete?'))
                        {
                            $.ajax({
                        
                                url:'../php/event_delete.php',
                                type:'POST',
                                data:{id:id},
                                success:function()
                                {
                                    alert('deleted');
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_event,1000);
                                }

                            });
                        }
                });
                
                
                $(document).on('dblclick','.pic-to-del',function(){
                    
                    $(this).siblings('.remove-pics').fadeIn();
                    
                });
                
                $(document).on('click','.rm-pic',function(){
                    var id = $(this).attr('rel');
                    
                    if(confirm('Do u want to delete pic?'))
                        {
                            $.ajax({
                        
                                url:'../php/event_pic_remove.php',
                                type:'POST',
                                data:{id:id},
                                success:function()
                                {
                                    alert('deleted');
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_event,1000);
                                }

                            });
                        }
                    
                });
                
                
            });
            
            function fetch_event(page)
                {
                    
                    var pullEvent = true;
                    
                    $.ajax({
                       
                        
                        url:'../php/event_process.php',
                        data:{plullEvent:pullEvent,page:page},
                        type:'POST',
                        success:function(data)
                        {
                            if(!data.error)
                                {
                                    $('#events').html(data);
                                }
                        }
                        
                        
                    });
                }
                
            
        </script>
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>