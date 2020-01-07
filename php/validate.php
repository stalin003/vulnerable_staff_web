<?php

include 'db.php';

if(isset($_POST['submit']))
{
    $username = validate($_POST['user_id']);
    $password = validate($_POST['password']);
    
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    
    $sql = "select username, password from login where username = '$username'";
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0)
    {
        
    }
    else
    {
        die("invalid username or password");
    }
}

function validate($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    
    
    return $data;
}

?>