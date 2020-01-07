<?php

include 'init.php';

$obj = new base_class();

$target_dir = "../question_papers/";
$target_file = "";

$uploadData = 0;


if(isset($_POST['question_paper_year']) && isset($_POST['question_paper_sem']) && isset($_FILES['qpaper']['name']))
{
    ;
    
    
    
    $target_file = $target_dir.time().uniqid(rand()).$_FILES['qpaper']['name'];
    $type = $_FILES['qpaper']['type'];

    $sem_id = $_POST['question_paper_sem'];
    $sem_id = substr($sem_id,4,1);
    
    $year = $_POST['question_paper_year'];
    
    if($type == "application/pdf")
    {
        $uploadData = 1;
    }
    
    
    if($uploadData == 1)
    {
        if($obj->normal_query("insert into question_paper(sem_id,year,paper_link) values(?,?,?)",array($sem_id, $year, $target_file)))
        {
            move_uploaded_file($_FILES['qpaper']['tmp_name'], $target_file);
        }
    }
    
}



//if(isset($_POST['question_paper_year']) && isset($_POST['question_paper_sem']) && isset($_FILES['qpaper']['name']))
//{
//    $year = $_POST['question_paper_year'];
//    $sem_id = $_POST['question_paper_sem'];
//    
//    $target_file = $target_dir.time().uniqid(rand()).$_FILES['qpaper']['name'];
//    $type = $_FILES['qpaper']['type'];
//    
//    if($type == "application/pdf")
//    {
//        $uploadData = 1;
//    }
//    
//    if($uploadData == 1)
//    {
//        if($obj->normal_query("insert into question_paper(sem_id,year,paper_link) values(?,?,?)",array($sem_id, $year, $target_file)))
//        {
//            move_uploaded_file($_FILES['qpaper']['tmp_name'], $target_file);
//        }
//    }
//}



?>