<?php

include 'init.php';
$obj = new base_class();

if(isset($_POST['year']))
{
    
    $sem = $_POST['year'];
    
    $obj->normal_query("SELECT sem from semister WHERE sem NOT IN (SELECT question_paper.sem_id FROM question_paper WHERE question_paper.year = ?)", array($sem));

    $result = $obj->fetch_all();
    
    foreach($result as $semister)
    {
        $selec_sem = $semister->sem;
        
        echo "<option>Sem $selec_sem</option>";
    }
}





?>