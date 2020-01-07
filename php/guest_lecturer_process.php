<?php

include 'init.php';
include 'session_variables.php';

$obj = new base_class();




$obj->normal_query("select * from guest_lecturer order by date desc");
    
    $row_count = $obj->count_rows();
    
    $limit = 6;
    
    $end_page = ceil($row_count/$limit);
    
    
    
    if(!empty($_POST['page']))
    {
        
        $page = $_POST['page']; 
        
        if($page > $end_page)
        {
            $page = $end_page;
        }
    }
    else
    {
        $page = 1;
    }
    
    
    $start_row = ($page - 1) * $limit;









$obj->normal_query("select * from guest_lecturer order by date desc limit $start_row, $limit");

$result = $obj->fetch_all();

foreach($result as $guest_profile)
{
    $id = $guest_profile->id;
    $fname = $guest_profile->first_name;
    $subject = $guest_profile->subject;
    $from_ch = $guest_profile->start_ch;
    $to_ch = $guest_profile->end_ch;
    $report = $guest_profile->reports;
    $lecturer_pic = $guest_profile->img_link;
    $class= $guest_profile->class;
    $date = $guest_profile->date;
    
    echo "
    
    
    <div class='guest-reports'>
               
       <div class='guest-lecturer'>

            <div class='guest-lecturer-profile'>

                <div class='guest-lecturer-profile-pic'>
                    <div class='guest-lecturer-pic'>
                        <img src='$lecturer_pic' alt='profile_pic'>
                    </div>
                    <span><p>$fname </p></span>
                </div>

                <div class='guest-lecturer-details'>
                    <h4>$subject</h4>
                    <p>$date</p>";
                    
    if(!empty($to_ch) && !empty($from_ch))
    {
        echo "<p>ch - $from_ch to ch - $to_ch</p>";
    }
                    
    echo "          <p>$class</p>
                    
                </div>



            </div>

        </div>

        <div class='reports'>
            <div class='tab col'>
                <button class='act'>Reports</button>";
    
    
    if($_SESSION['login'] == $login_staff_session)
    {
        
        echo "
        
        <div class='staff-more gl-more col'>
            <button><i class='icon-more fas fa-ellipsis-v'></i></button>
            <div class='staff-more-option gl-more-option'>
                <ul class='col'>
                    <li><a rel='$id' class='staff_profile_delete gl_delete' href='#'><i class='icon-more fas fa-trash-alt'></i>delete</a></li>
                </ul>
            </div>
        </div>
        
        
        ";
        
    }
    
    
    
    echo "

            </div>
            <div class='tab-content'>
                <p>
                    $report
                </p>
            </div>
        </div>

   </div>
    
    
    
    
    ";
}


echo "
    <div class='pagination'>
        <div class='pages'>";

    if($page > 1)
    {
        echo "

            <div class='page-link'>

                <div class='prev-link' rel='$page'>
                    <a href='#'>prev</a>    
                </div>
            </div>

        ";
    }

    if($page < $end_page)
    {
        echo "

            <div class='page-link-2'>
                <div class='next-link' rel='$page' rel2='$end_page'>
                    <a href='#'>next</a>    
                </div>
            </div>

        ";
    }


    echo "  </div>

    </div>

    ";



?>




















