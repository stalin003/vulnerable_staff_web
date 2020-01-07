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
               <h2>Gallery</h2>
           </div>
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
            
        </section>
        
        <section class="gallery row">
           
           <div>
               <div class="col">
                    <div class="span-1-of-4 gallery-images">
                        <div class="gm">
                            <img src="../images/221245.png" alt="event_pics">
                            <span><strong>Event Name</strong></span>
                            <em>uploaded on&#58; august/25/2019</em>
                        </div>
                    </div>
                    <div class="span-1-of-4 gallery-images">
                        <div class="gm">
                           <img src="../images/270187.jpg" alt="event_pics">
                            <em>uploaded date</em>
                            
                        </div>
                    </div>
                    <div class="span-1-of-4 gallery-images">
                       <div class="gm">
                            <img src="../images/643477.jpg" alt="event_pics">
                            <em>uploaded date</em>   
                       </div>
                        
                    </div>

                    <div class="span-1-of-4 gallery-images">
                        <div class="gm">
                            <img src="../images/164995.jpg" alt="event_pics">
                            <em>uploaded date</em>
                        </div>
                    </div>
                    <div class="span-1-of-4 gallery-images">
                        <div class="gm">
                            <img src="../images/643476.jpg" alt="event_pics">
                            <em>uploaded date</em>
                        </div>
                    </div>
                    <div class="span-1-of-4 gallery-images">
                        <div class="gm">
                            <img src="../images/660058.jpg" alt="event_pics">
                            <em>uploaded date</em>
                        </div>
                    </div>
                </div>
           </div>
            
        </section>
        
        
        
        <?php
        include 'footer.php';
        ?>
    </body>
</html>