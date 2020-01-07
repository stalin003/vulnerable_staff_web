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
        <?php
            include 'nav_and_more.php';
        ?>
        
        
        <section class="row">
           <div class="box head-text">
               <h2><i class="heading-icon fas fa-book"></i>Library</h2>
           </div>
           
           
           <?php
            
            if($_SESSION['login'] == $login_staff_session)
            {
            ?>
              
            
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
            <div class="staff-btn">
                <input id="insert" type="button" value="INSERT" name="insert">
            </div>        
            
            
            <?php                                            
                
            }
            
            
            
            ?>
            
        </section>
        
        <section class="event">
           <div class="line row">
               
            <div class="box library events row">
        
               
                <h2>New Arrival</h2>
                <div class="col">
                    <em>last updated</em>
                </div>
                
                
                <div class="vertical-books-slide">
                   
                    <div class="next">&rarr;</div>
                    <div class="pre">&larr;</div>
                    
                    
                    <div class="book-img">
                        <img src="../books/51y1U5JPfyL.jpg" class="book-img1">
                        <img src="../books/51k5NgL+B+L.jpg" class="book-img2">
                        <img src="../books/71rUP3ZW4NL.jpg" class="book-img3">
                    </div>
                    
                    <div class="book-details">
                       
                       <div class="book1 book">
                            <h3>Python: The Complete Reference</h3>
                        
                            <ul>
                                <li>Martin C. Brown </li>
                                <li>720 pages</li>
                            </ul>
                        </div>
                       
                       
                       
                        <div class="book2 book">
                            <h3>Java the complete reference</h3>
                        
                            <ul>
                                <li>Herbert Schildt</li>
                                <li>1296 pages</li>
                            </ul>
                        </div>
                        
                        <div class="book3 book">
                            <h3>C++: The Complete Reference, 4th Edition</h3>
                        
                            <ul>
                                <li>Herbert Schildt</li>
                                <li>1068 pages</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                </div>
                
                
                <div class="horizontal-books-slide">
                    
                    <div class="book caption-book">
                        <h3>MCA library books</h3>
                    </div>
                    
                    <div class="book-container">
                        
                        <div class="limiter">
                            <div class="book-slider">
                            
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/51k5NgL+B+L.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>java complete reference</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>

                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/51y1U5JPfyL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>python complete reference</h4>
                                        <p>author name</p>
                                    </div>
                                </div>

                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>
                                
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>
                                
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>
                                
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>
                                
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>
                                
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>
                                
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>
                                
                                <div class="linear-books">
                                    <div class="v-books-design-pic">
                                        <img src="../books/71rUP3ZW4NL.jpg">
                                    </div>
                                    <div class="book-content">
                                        <h4>C++: The Complete Reference, 4th Edition</h4>
                                        <p>Herbert Schildt</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="next-ver">&rarr;</div>
                        <div class="pre-ver prev-fix">&larr;</div>
                        
                    </div>
                    
                </div>
                
                
            </div>
            
            
            
            
           </div>
            
            
            
        </section>
        
        
        
        <?php
        include 'footer.php';
        ?>
        
        <script>
            
            $(document).ready(function(){
               
                var counter = 2;
                
                $('.next').click(function(){
                   
                    if(counter == 1)
                        {
                            $('.book-img1').animate({top:"-150%"});
                            $('.book-img2').animate({top:"0"});
                            
                            
                            $('.book1').hide();
                            $('.book3').hide();
                            
                            $('.book2').show();
                            
                            
                            counter = 2;
                        }
                    else if(counter == 2)
                        {
                            $('.book-img2').animate({top:"-150%"});
                            $('.book-img3').animate({top:"0"});
                            
                            $('.book1').hide();
                            $('.book2').hide();
                            
                            $('.book3').show();
                            
                            
                            counter = 3;
                        }
                    
                });
                
                
                $('.pre').click(function(){
                   
                    
                    if(counter == 2)
                        {
                            $('.book-img1').animate({top:"0"});
                            $('.book-img2').animate({top:"150%"});
                            
                            $('.book2').hide();
                            $('.book3').hide();
                            
                            $('.book1').show();
                            
                            counter = 1;
                        }
                    else if(counter == 3)
                        {
                            $('.book-img2').animate({top:"0"});
                            $('.book-img3').animate({top:"150%"});
                            
                            
                            $('.book1').hide();
                            $('.book3').hide();
                            
                            $('.book2').show();
                            
                            counter = 2;
                        }
                    
                });
                
                
                
                var one_img_width = 250;
                
                var needed_width = one_img_width * 10;
                
                var limiter_width = $('.limiter').innerWidth();
                
                var trans_per_click = Math.floor(needed_width/limiter_width);
                
                var slider_per_width = needed_width/trans_per_click;
                
                
                var flag = 1;
                
                var sum_width = 0;
                
                $('.next-ver').click(function(){
                    
                    
                   if(flag == 1 && flag < trans_per_click)
                       {
                           sum_width += (-slider_per_width);
                           $('.book-slider').animate({left:sum_width});
                           flag = 2;
                       }
                    else if(flag == 2 && flag < trans_per_click)
                       {
                           sum_width += (-slider_per_width);
                           $('.book-slider').animate({left:sum_width});
                           flag = 3;
                       }
                    else if(flag == 3 && flag < trans_per_click)
                       {
                           sum_width += (-slider_per_width);
                           $('.book-slider').animate({left:sum_width});
                           flag = 4;
                       }
                    
                });
                
                $('.pre-ver').click(function(){
                    
                    
                    
                   if(flag == 4)
                       {
                           sum_width += (slider_per_width);
                           $('.book-slider').animate({left:sum_width});
                           flag = 3;
                       }
                    else if(flag == 3)
                        {
                            sum_width += (slider_per_width);
                           $('.book-slider').animate({left:sum_width});
                           flag = 2;
                        }
                    else if(flag == 2)
                        {
                            sum_width += (slider_per_width);
                           $('.book-slider').animate({left:sum_width});
                           flag = 1;
                        }
                    
                });
            });
            
            
        </script>
        
        
    </body>
</html>


























