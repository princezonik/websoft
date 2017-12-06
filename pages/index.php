<?php
require_once("../functions/database.php"); 
require_once("../includes/header.php");

?>

<?php 

	$user = new User();
	$user->open_connection();

  	if ($_SERVER["REQUEST_METHOD"] == "POST"){  
          
    	$register = $user->query($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password']);  
  	} 


?>
	<link rel="stylesheet" type="text/css" href="../stylesheets/index.css">

	<span class="btn-sign" >
			<a href="signup.php" id="btn-sign-up">Join Us</a>
			<a href="login.php" id="btn-sign-in">Log In</a>
	</span>

	<section>

		<form action="" method="post" class="field-sign-in">

			<input type="text" name="firstname" value="" placeholder="First Name">

			<input type="text" name="lastname" value="" placeholder="Last Name">

			<input type="text" name="username" value="" placeholder="Enter username here">

			<input type="text" name="email" value="" placeholder="Enter email here">

			<input type="password" name="password" value="" placeholder="Create a password">

			<input type="password" name="confirmpassword" value="" placeholder="Confirm password">

			<input type="submit" name="btn-login-submit" value="Sign Up">

			<a href="#" id="fgt-pass">forgotten password? </a>
		</form>

	</section>



<?php require_once("../includes/footer.php"); ?>