<?php

$start_year = date('y')-3;
$end_year = 12;

for($i = $start_year; $i >= $end_year; $i--)
{
    echo "
    <option>20$i</option>
    
    ";
}


?>