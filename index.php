<?php

include 'php/init.php';

$obj = new base_class();

$chk_code = 1117039;
$chk_active = 1;

$error="";

$username = $password = $error = "";
$value="";

if(isset($_POST['submit']))
{
    $username = $obj->security($_POST['user_id']);
    $password = $_POST['password'];
    
    
    
    $obj->create_session('username', $username);
    
    $user_chk = substr($username,0, 7);
    
    if($user_chk == $chk_code)
    {
        $obj->normal_query("select roll_no, password, active from student where roll_no = ? limit 1", array($username));
        
        $user = $obj->single_result();
        
        $active = $user->active;
        
        echo $active;
        if(isset($_SESSION['username']))
        {
            $value = $_SESSION['username'];
        }
        
        if($obj->count_rows() > 0)
        {
            if(password_verify($password, $user->password) && $chk_active == $active)
            {
                $error = "";
                $_SESSION['username']="";
                $obj->create_session("login", "student");
                $value = "";
            }
            else
            {
                $error = "&#42;Invalid username or password";
            }
        }
        else
        {
            $error = "&#42;Invalid username or password";
        }
        
        
    }
    else
    {
        $obj->normal_query("select username, password from login where username = ? limit 1",array($username));
    
    
        $user = $obj->single_result();

        if(isset($_SESSION['username']))
        {
            $value = $_SESSION['username'];
        }


        if($obj->count_rows() > 0)
        {
            if(password_verify($password, $user->password))
            {
                $error = "";
                $_SESSION['username']="";
                $obj->create_session("login", "staff");
                
                
                //creating staff_session_user_name
                
                
                $obj->create_session("staff_user_name", $value);
                
                
                
                //end
                
                
                
                $value = "";
            }
            else
            {
                $error = "&#42;Invalid username or password";
            }
        }
        else
        {
            $error = "&#42;Invalid username or password";
        }
    }
    
    
    
    

}


if(!empty($_SESSION['login']))
{
    header('Location: /MCA_staff_web/pages/home.php');
    die();
}

?>










<!DOCYTPE html>
<html>
    <head>
        <title>MCA Dept Log In</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/query.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" href="assets/favicon/logo.png">
    </head>
    <body>
        <section class="background">
                <div class="login-box">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="span-1-of-3">
                            <div class="login-form">
                                <h2>MCA Dept Login</h2>
                                <input type="text" name="user_id" placeholder="ID" value="<?php echo $value ?>" required>
                                <input type="password" name="password" placeholder="password" required>
                                <input type="submit" value="Log In" name="submit">
                                <span class="error" style="font-size:80%; color:#a50000"><?php echo $error ?></span>
                            </div>
                            
                            <div class="dev2">
                                <p>Developed by</p>
                                <p>Stalin Joseph</p>
                            </div>
                            
                        </div>
                        
                        <div class="span-2-of-3 right">
                            <div class="login-design">
                                <div class="hero-text">
                                    <h1>Loyola Degree &amp; Pg College</h1>
                                    <p>(Autonomous and afflilated to Osmania University)</p>
                                    <p>Re-accredited with 'A' Grade (3.50/4.00 CGPA) By NAAC</p>
                                    <p>A "College With Potential For Excellence" By UGC</p>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
        </section>
    </body>
</html>










