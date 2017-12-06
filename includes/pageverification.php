<?php 

	if (isset($_POST['btn-login-submit'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "INSERT INTO users (first_name, last_name, user_name, e_mail, password) VALUES ('$firstname, $lastname', '$username', '$email', '$password')";
	}
	

?>