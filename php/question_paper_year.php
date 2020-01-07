<?php


$year = date('y');
$end_year = 12;

for($i=$year; $i>=$end_year; $i--)
{
    
    echo "<option>20$i</option>";

}



?>