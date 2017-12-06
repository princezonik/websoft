<?php  
  session_start();  

  require_once ('../functions/database.php'); 
  require_once ('../includes/header.php');

  $user = new User();  
  $user->open_connection();

  if ($user->session()) {  
    header("location:home.php");  
  }  
   
  if ($_SERVER["REQUEST_METHOD"] == "POST"){  
    $login = $user->login($_REQUEST['email'],$_REQUEST['password']);

    if($login){  
      header("location:home.php");  
    }
    else{  
      echo "Login Failed!";  
    }  
  } 

?>  
    <html>  
  
    <head>  
        <title>Log In</title>  
        <link rel="stylesheet" type="text/css" href="../stylesheets/login.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Log In</h1>  
            <form action="" method="post">  
                <input type="text" name="email" placeholder="Please Enter Email" required />  
                <br />  
                <input type="password" name="password" placeholder="Please Enter Password" required />  
                <br />  
                <input type="submit" name="submit" value="Login" />  
            </form>  
            <p>Not registered yet?<a href="register.php"> Register Here</a></p>  
        </div>  
    </body>  
  
    </html> 