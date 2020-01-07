<?php

include 'init.php';

$obj = new base_class();

$start_date = date('y')-3;

$start_roll_no = "1117039".$start_date."200";

$obj->normal_query("SELECT roll_no from student WHERE roll_no NOT IN (SELECT student_id FROM placement) AND roll_no <= ? order by roll_no DESC", array($start_roll_no));

$result = $obj->fetch_all();

foreach($result as $std)
{
    $roll_no = $std->roll_no;
    echo "<option>$roll_no</option>";
}


?>