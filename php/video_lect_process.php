<?php

include 'init.php';
include 'session_variables.php';


$obj = new base_class();

if(isset($_POST['getvid']))
{
    $obj->normal_query("select * from vid_lect order by id desc");
    
    
    $result = $obj->fetch_all();
    
    
    foreach($result as $vid)
    {
        $id = $vid->id;
        $title = $vid->title;
        $embd = $vid->embed_txt;
        
        echo"
        
        
        <div class='video-lecture'>
                <div class='video-title'>
                    <h4>$title</h4>";
        
        if($_SESSION['login'] == $login_staff_session)
        {
            echo"
            
            <div class='vid-more'>
                <i class='icon-more-vid fas fa-ellipsis-v'></i>
                <div class='vid-over'>
                    <div class='vid-del'>
                        <i rel='$id' class='icon-table del-vid fas fa-trash'></i>
                    </div>
                </div>
            </div>
            
            ";
        }
           
        echo"
                </div>
            
            $embd
            
            </div>
        
        
        
        ";
        
    }
}


?>