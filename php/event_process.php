<?php

include 'init.php';
include 'session_variables.php';

$obj = new base_class();



$obj->normal_query("select * from college_events order by date_uploaded desc");
    
    $row_count = $obj->count_rows();
    
    $limit = 10;
    
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




$obj->normal_query("select * from college_events order by date_uploaded desc limit $start_row, $limit");

$result = $obj->fetch_all();

foreach($result as $events)
{
    $id = $events->id;
    $title = $events->title;
    $uploaded_date = $obj->time_ago($events->date_uploaded);
    $description = $events->description;
    
    $obj->normal_query("select * from college_events_pics where college_events_id=?",array($id));
    $event_pics = $obj->fetch_all();
    
    echo "
    
    <div class='box events page-more-setup' >";
          
    
    
    if($_SESSION['login'] == $login_staff_session)
    {
        echo "
        
        
        <div class='page-more'>
                 
         <div class='more-page'>
             <button class=''><i class='icon-more fas fa-ellipsis-v'></i></button>
             <div class='update-and-delete'>
                  <ul>
                      <li class='upload-pics' rel='$id'><i class='icon-more common-icon-space fas fa-upload'></i>upload pics</li>
                      <li class='delete-event' rel='$id'><i class='icon-more common-icon-space fas fa-trash-alt'></i>delete</li>
                  </ul>
              </div>
         </div>


      </div>
        
        
        
        
        ";
    }
    
    
    
    
    
    
    
    echo "
               
               
                <h2>$title</h2>
                <div class='col'>
                    <em>$uploaded_date</em>
                </div>
                
                <div class='event-gallery'>
                   <div class='col'>";
    
    
    foreach($event_pics as $pic)
    {
        $img_link = $pic->img_link;
        $img_id = $pic->id;
        
        
        echo "
        
        
        <div class='span-1-of-3 event-images event-pics'>
            <img class='pic-to-del' src='$img_link' alt='event_pics'>
            
            ";
        
        
        if($_SESSION['login'] == $login_staff_session)
        {
            
            echo "
            
            <div class='remove-pics'>
                <div class='rem'>
                    <i class='rm-pic fas fa-trash-alt' rel='$img_id'></i>
                </div>
                
            </div>
            
            
            
            ";
            
            
        }
        
        
        
        
        echo "
            
            
        </div>
        
        ";
        
        
    }
    
                            
                            
        echo"                    
                    </div>
                    
                </div>
                
                <p>$description</p>
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

                <div class='prev-link gen_link_2' rel='$page'>
                    <a href='#'>prev</a>    
                </div>
            </div>

        ";
    }

    if($page < $end_page)
    {
        echo "

            <div class='page-link-2'>
                <div class='next-link gen_link_2' rel='$page' rel2='$end_page'>
                    <a href='#'>next</a>    
                </div>
            </div>

        ";
    }


    echo "  </div>

    </div>

    ";



?>


<script>
    $(document).ready(function(){
        
        $('.upload-pics').click(function(){
            var id = $(this).attr('rel');
            
            $.ajax({
                url:'../php/event_insert_pics.php',
                data:{id:id},
                type:'POST',
                success:function(data)
                {
                    $('.event-image-upload').html(data);
                }
            });
            
            
        });
    });



</script>


























