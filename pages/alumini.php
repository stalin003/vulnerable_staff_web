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
    </head>
    <body>
        <?php
            include 'nav_and_more.php';
        ?>
        
        
        <section class="row">
           <div class="box head-text">
               <h2>Alumini</h2>
           </div>
<!--
            <div class="sch-btn col">
                <input class="find" type="text" placeholder="search" name="search">
                <select name="class_college">
                   <option selected>Search by</option>
                   <option>Name</option>
                   <option>Roll no</option>
                </select>
                
                
                <input class="find" type="button" value="Search" name="search-btn">
            </div>
-->
        </section>
        
        
        <section class="row alumini student-fix">
            <div>
               
                <table class="alumini-table">
                   <div class="student-caption"><div><b>Batch - </b></div><div class="student-class">
                      
                      <select class="class-year" name="class" onchange="fetch_alumni_onchange(1)">
<!--
                          <option>AMCA</option>
                          <option>NMCA</option>
                          <option selected>DMCA</option>
-->
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
                    
                    <div class="alumini-list">
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
        
        <script type="text/javascript" src="../js/common.js"></script>
        
        
        <script>
        
            
            $(document).ready(function(){
                
                setTimeout(fetch_alumni_option,1000);
                setTimeout(fetch_alumni,1000);
                
                
                
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
                        fetch_alumni_onchange(page);
                    });

                    $(document).on('click','.next-link',function(){

                        var page = $(this).attr('rel');
                        page++;
                        fetch_alumni_onchange(page);
                    });
                
                
                
                
                
                
                
                $(document).on('click','#alumni-delete',function(){
                    
                    var id = $(this).attr('rel');
                    
                    if(confirm('Are you sure?'))
                        {
                            $.ajax({
                                
                                url:'../php/alumni_delete.php',
                                type:'POST',
                                data:{id:id},
                                success:function()
                                {
                                    alert('deleted');
                                },
                                complete:function()
                                {
                                    setTimeout(fetch_alumni_onchange, 1000);
                                }
                                
                            });
                        }
                    
                });
                
                
            });
            
            
            
            function fetch_alumni_onchange(page)
            {
                var data = $('select.class-year').val();
                
                $.ajax({
                    
                    url:"../php/alumini_process.php",
                    type:'POST',
                    data:{data:data,page:page},
                    success:function(data)
                    {
                        $('.alumini-list').html(data);
                    }
                    
                });
            }
            
            function fetch_alumni()
            {
                var data = $('select.class-year').val();
                
                $.ajax({
                    
                    url:"../php/alumini_process.php",
                    type:'POST',
                    data:{data:data},
                    success:function(data)
                    {
                        $('.alumini-list').html(data);
                    }
                    
                });
            }
            
            function fetch_alumni_option()
            {
                $.ajax({
                    
                    url:'../php/alumni_option.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('.class-year').html(data);
                    }
                    
                });
            }
        
        
        
        </script>
    </body>
</html>


























