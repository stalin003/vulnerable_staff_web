<?php

$year = date('y') - 3;

for($i=$year; $i>=12; $i--)
{
    echo "<option>20$i</option>";
}



?>