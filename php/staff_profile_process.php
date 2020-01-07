<?php

include 'init.php';
include 'session_variables.php';

$obj = new base_class();
$search=$sql="";


if(isset($_POST['search']))
{
    $search = $_POST['search'];
}

if(empty($search))
{
//    $sql="select * from staff_profile";
    
    $obj->normal_query("select * from staff_profile");
    
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
    
    $obj->normal_query("select * from staff_profile limit $start_row, $limit");
}
else
{
//    $sql="select * from staff_profile where name like'$search%'";
    
    
    $obj->normal_query("select * from staff_profile where name like ?",array("%$search%"));
    
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
    
    $obj->normal_query("select * from staff_profile limit $start_row, $limit");
    
    
    
    
    
    
    $obj->normal_query("select * from staff_profile where name like ? limit $start_row, $limit",array("%$search%"));
}



$result = $obj->fetch_all();

foreach($result as $profile)
{
//    $id = $row['id'];
    $id = $profile->id;
//    $name = $row['name'];
    $name = $profile->name;
//    $work = $row['work'];
    $work = $profile->work;
//    $description = $row['description'];
    $description = $profile->description;
//    $address = $row['address'];
    $address = $profile->address;
//    $mobile_no = $row['mobile_no'];
    $mobile_no = $profile->mobile_no;
//    $skills = $row['skills'];
    $skills = $profile->skills;
//    $profile_pic = $row['img_link'];
    $profile_pic = $profile->img_link;

    echo "<div class='pro col' id='staff_profile'>
              
   <div class='profile-pic span-1-of-3'>
       <img src='$profile_pic' alt='profile-img'>
       <p class='profile-name'><strong>$name</strong></p>
       <em>&#40;$work&#41;</em>
   </div>

    <div class='span-2-of-3 profile-desc'>
        <div class='tab col'>
            <button class='descp act'>description</button>
            <button class='details'>details</button>
            <button class='skill'>skill</button>
            
            
            ";
    
    if($_SESSION['login'] == $login_staff_session)
    {
        echo "
        
        
        <div class='staff-more col'>
                <button><i class='icon-more fas fa-ellipsis-v'></i></button>
                <div class='staff-more-option'>
                    <ul class='col'>
                        <li><a rel='$id' class='staff_profile_update' href='#'><i class='icon-more fas fa-user-edit'></i>update</a></li>
                        <li><a rel='$id' class='staff_profile_delete' href='#'><i class='icon-more fas fa-trash-alt'></i>delete</a></li>
                    </ul>
                </div>
            </div>
        
        
        
        ";
    }
            
                
    echo"            
        </div>
        <div class='tab-content'>
            <p>
                $description
            </p>
            <p>
                <strong>Email: </strong>$address <br>
                <strong>Mobile no: </strong>$mobile_no
            </p>
            <p>
                $skills
            </p>
        </div>

    </div>

</div>";
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

<script>
    $(document).ready(function(){
        
        $('.tab-content').children('p').hide();
        
        $('.tab-content p:nth-child(1)').fadeIn();
        
        $('.details').click(function(){
            $(this).parent().siblings('.tab-content').children('p').hide();
            $(this).parent().siblings('.tab-content').children('p:nth-child(2)').fadeIn();
            
            $(this).parent().children('button').removeClass('act');
            $(this).addClass('act');
        });
        
        $('.descp').click(function(){
            $(this).parent().siblings('.tab-content').children('p').hide();
            $(this).parent().siblings('.tab-content').children('p:nth-child(1)').fadeIn();
            
            $(this).parent().children('button').removeClass('act');
            $(this).addClass('act');
        });
        
        $('.skill').click(function(){
            $(this).parent().siblings('.tab-content').children('p').hide();
            $(this).parent().siblings('.tab-content').children('p:nth-child(3)').fadeIn();
            
            $(this).parent().children('button').removeClass('act');
            $(this).addClass('act');
        });
        
        $('.staff-more').click(function(){
            $(this).children('button').toggleClass('act');
            $(this).children('.staff-more-option').toggle();
        });
        
        $('.staff_profile_update').click(function(event){
           event.preventDefault();
            var id = $(this).attr('rel');
            
            /************************************/
            /**update code comes here in future**/
            /************************************/
            
            $.ajax({
                url:'../php/staff_profile_update.php',
                data:{id:id},
                type:'POST',
                success:function(data){
                    $('.staff-profile-update-card').html(data);
                    $('.black-screen').show();
                    $('body').css({overflowY:'hidden'});
                    $('.staff-profile-update-card').show();
                }
            });
            
            
        });
        
        
    });
    
</script>











<!--

<div class="pro col" id="staff_profile">
              
   <div class="profile-pic span-1-of-3">
       <img src="../images/164995.jpg" alt="profile-img">
       <p><strong>Nami</strong></p>
       <em>&#40;straw hat pirate navigator&#41;</em>
   </div>

    <div class="span-2-of-3 profile-desc">
        <div class="tab col">
            <button class="act">description</button>
            <button>details</button>
            <button>skill</button>
        </div>
        <div class="tab-content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate in saepe necessitatibus suscipit facere omnis voluptatem laudantium fuga aut enim quas, perspiciatis, laborum distinctio ipsa rerum incidunt dolorum minima sequi.
            </p>
        </div>

    </div>

</div>
-->
