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
       
       <div class="test"></div>
       
       <div class="staff-profile-insert-card industrial-visit-insert-card">
       
       <form class="form-card" action="#" method="post" enctype="multipart/form-data">
          <input type="text" name="title" placeholder="Industry Name" required>
          <textarea name="description" placeholder="Description" required></textarea>
          <input type="file" class="file_to_upload" name="profile_pic" accept="image/jpeg,image/png" placeholder="Cover Pic" required>
          <span class="pic_error"></span>
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
        
        <div class="staff-profile-insert-card industrial-visit-image-upload">
       
<!--
           <form class="form-card" action="#" method="post" enctype="multipart/form-data">
             <input type="file" class="file_to_upload" name="profile_pic" accept="image/jpeg,image/png" placeholder="Upload Pic" required>
             <span class='image_error'></span>
              <input type="submit" value="submit" name="submit">
              <input class="cancel-btn" type="button" value="cancel">

           </form>
-->
       
        </div>
       
       
       
        <?php
            include 'nav_and_more.php';
        ?>
        
        
        <section class="row">
           <div class="box head-text">
               <h2><i class="heading-icon fas fa-industry"></i>Industrial Visit</h2>
           </div>
            
            <?php
            
            if($_SESSION['login'] == $login_staff_session)
            {
                
            ?>    
                
<!--
            <div class="sch-btn col">
                <input class="find find-fix" type="text" placeholder="search" name="search">
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
           <div class="line row" id="industrial-visit">
               
<!--
            <div class="box events row page-more-setup">
               
               
               <div class='page-more'>
                 
                 <div class='more-page'>
                     <button class=''><i class='icon-more fas fa-ellipsis-v'></i></button>
                     <div class='update-and-delete'>
                          <ul>
                              <li class='upload-pics' rel='$id'><i class='icon-more common-icon-space fas fa-upload'></i>upload pics</li>
                              <li class='delete-industry-visit' rel='$id'><i class='icon-more common-icon-space fas fa-trash-alt'></i>delete</li>
                          </ul>
                      </div>
                 </div>
                 
                  
              </div>
               
               
                <h2>Industrival visit - name</h2>
                <div class="col">
                    <em>uploaded data</em>
                </div>
                
                <div class="industrial-visit-hero">
                    <img src="../images/architecture-building-city-1049488.jpg" alt="Industry pic">
                    <div class="hero-text">
                        <h2>Industrial visit - name</h2>
                    </div>
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
                        fetch_industrial_visit(page);
                    });

                    $(document).on('click','.next-link',function(){

                        var page = $(this).attr('rel');
                        page++;
                        fetch_industrial_visit(page);
                    });
                
                
                
                
                
                
                
                $('.industrial-visit-insert-card .form-card').submit(function(event){
                    event.preventDefault();
                    var data = new FormData(this);
                    
                    
                    $.ajax({
                        
                        url:"../php/industry_visit_insert.php",
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
                                    alert('uploaded');
                                    $('.image-error').html(data);
                                    $('.industrial-visit-insert-card .form-card')[0].reset();
                                    $('.industrial-visit-insert-card').hide();
                                    $('body').css({overflowY:'auto'});
                                    $('.black-screen').hide();
                                    $('section').css({"filter":"blur(0px)"});
                                    $('header').css({"filter":"blur(0px)"});
                                    $('.pic_error').html("");
                                    setTimeout(fetch_industrial_visit,1000);
                                }
                            else
                                {
                                    alert(data.status);
                                }
                            
                            
                        }
                        
                        
                    });
                    
                    
                });
                
                
                
                setTimeout(function(){
                    fetch_industrial_visit();
                },1000);
                
                
                $(document).on('submit','.industrial-visit-image-upload .form-card',function(event){
                    event.preventDefault();
                    var id = $(this).attr('rel');
                    var postData = new FormData(this);
                    postData.append('id',id);
                    
                    
                    $.ajax({
                        
                        url:'../php/industry_visit_insert.php',
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
                                    setTimeout(fetch_industrial_visit,1000);
                                }
                            else
                                {
                                    alert(data.status);
                                }
                        }
                        
                    });
                    
                    
                });
                
                
                $(document).on('click','.delete-industry-visit',function(event){
                    
                    var id = $(this).attr('rel');
                    
                    if(confirm('Do u want to delete?'))
                        {
                            $.ajax({
                        
                                url:'../php/industrial_visit_delete.php',
                                type:'POST',
                                data:{id:id},
                                success:function()
                                {
                                    alert('deleted');
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_industrial_visit,1000);
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
                        
                                url:'../php/industrial_visit_pic_remove.php',
                                type:'POST',
                                data:{id:id},
                                success:function()
                                {
                                    alert('deleted');
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_industrial_visit,1000);
                                }

                            });
                        }
                    
                });
                
                
            });
            
            
            function fetch_industrial_visit(page)
                {
                    
                    var pullEvent = true;
                    
                    $.ajax({
                       
                        
                        url:'../php/industrial_visit_process.php',
                        data:{plullEvent:pullEvent,page:page},
                        type:'POST',
                        success:function(data)
                        {
                            if(!data.error)
                                {
                                    $('#industrial-visit').html(data);
                                }
                        }
                        
                        
                    });
                }
                
        
        </script>
        
        
    </body>
</html>