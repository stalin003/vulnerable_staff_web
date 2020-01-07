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
               <h2><i class="heading-icon far fa-clock"></i>Schedule</h2>
           </div>
            <div class="sch-btn col">
<!--                <input class="find" type="text" placeholder="search" name="search">-->
                <select name="course_year">
                    <option selected>AMCA</option>
                    <option>NMCA</option>
                    <option>DMCA</option>
                </select>
                
                <select name="sem">
                    <option selected>select sem</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
                
                <input type="number" name="year" placeholder="year">
                <input class="find" type="button" value="Search" name="search-btn">
            </div>
            <div class="staff-btn">
                <input id="insert" type="button" value="Insert Schedule" name="insert">
            </div>
        </section>
        
        <section class="row time-table">
            <div>
               
                <table>
                   <caption>AMCA - 1st sem 2019</caption>
                    <tr>
                        <th>Hour</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <td rowspan="8"><p class="vert">LUNCH: 12.15 p.m to 01.00 p.m</p></td>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <th><time>09:30 a.m 10:25 a.m</time></th>
                        <th><time>09:30 a.m 10:25 a.m</time></th>
                        <th><time>09:30 a.m 10:25 a.m</time></th>
                        <th><time>09:30 a.m 10:25 a.m</time></th>
                        <th><time>09:30 a.m 10:25 a.m</time></th>
                        <th><time>09:30 a.m 10:25 a.m</time></th>
                    </tr>
                    <tr>
                        <th>DAY - 1</th>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                    </tr>
                    <tr>
                        <th>DAY - 2</th>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                    </tr>
                    <tr>
                        <th>DAY - 3</th>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                    </tr>
                    <tr>
                        <th>DAY - 4</th>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                    </tr>
                    <tr>
                        <th>DAY - 5</th>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                    </tr>
                    <tr>
                        <th>DAY - 6</th>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                        <td>computer science</td>
                    </tr>
                </table>
                
            </div>
            
        </section>
        
        
        
        <?php
        include 'footer.php';
        ?>

    </body>
</html>