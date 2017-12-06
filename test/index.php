<?php 

	require_once("../functions/database.php");

	$user = new User();
	$user->open_connection();

  	if ($_SERVER["REQUEST_METHOD"] == "POST"){  
          
    	$register = $user->query($_REQUEST['firstname'],$_REQUEST['lastname'], $_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password']); 

    	if($register){  
      		echo "Registration Successful!";  
    	}
     	else{  
      		echo "Entered email already exist!";  
     	}  
  	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username" placeholder=" Enter password here">
		<input type="text" name="email" placeholder=" Enter email here">
		<input type="password" name="password" placeholder=" create a password">

		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>