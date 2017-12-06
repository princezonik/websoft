<?php
require_once("database.php");

class User{



	public function query(){

		$result = mysqli_query($this->connection,$sql_query);
		if (isset($_POST['btn-signup-submit'])) {
			
		}
	}
}


$user = new User();


$user->$sql_query = "INSERT INTO users (first_name, last_name, user_name, e_mail, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

?>