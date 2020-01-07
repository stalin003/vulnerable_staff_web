<?php

include 'init.php';
include 'session_variables.php';

$obj = new base_class();

$obj->normal_query("SELECT substring(year,3,2) AS year FROM question_paper ORDER by year DESC LIMIT 1; ");

$result =  $obj->fetch_all();

foreach($result as $s_year)
{
    $start_year = $s_year->year;
}

$obj->normal_query("SELECT substring(year,3,2) AS year FROM question_paper ORDER by year LIMIT 1; ");

$result =  $obj->fetch_all();

foreach($result as $s_year)
{
    $end_year = $s_year->year;
}


if(!empty($start_year) && !empty($end_year))
{
    
    for($i=$start_year; $i>=$end_year; $i--)
    {
        $year = "20$i";
        echo "

        <div class='question-paper-year'>
            <div class='paper-callapse'>
                <h3>$year papers</h3>
                <i class='fas fa-plus'></i>
            </div>

            <div class='sub-paper'>";


        $obj->normal_query("SELECT id, sem_id, paper_link FROM question_paper WHERE year = ? ORDER BY sem_id", array($year));

        $sem_res = $obj->fetch_all();


        foreach($sem_res as $sem_papers)
        {
            $paper_id = $sem_papers->id;
            $sem_no = $sem_papers->sem_id;
            $paper_link = $sem_papers->paper_link;

            echo "

            <div class='papers'>
               <p>Sem &mdash; $sem_no</p>
                <ul>
                    <li>all subjects &mdash; <a href='$paper_link'>sem-$sem_no papers</a>";
                    
            if($_SESSION['login'] == $login_staff_session)
            {
                echo"
                    
                    <i rel='$paper_id' id='paper-delete' class='icon-qpaper fas fa-trash'></i>
                    ";
            }
                    
                    
                    
            echo"   </li>
                </ul>
            </div>


            ";

        }



        echo "
            </div>
        </div>";

    }
}
else
{
    echo "
    <table>
        <tr>
            <td colspan = 11 style='padding:10px;color:#000;text-transform:capitalize; text-align:center'>no record found</td>
        </tr>
    </table>
    ";
}





?>





<!--
<div class='papers'>
   <p>Sem &mdash; 1</p>
    <ul>
        <li>all subjects &mdash; <a href='../question_papers/DM%20Seminar%20Questions.pdf'>sem-1 papers</a></li>
    </ul>
</div>-->
