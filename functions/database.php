<?php
 require_once("../includes/config.php");
	
class User{

	private $connection;

	public function open_connection(){
			$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
			if(!$this->connection){
				die("Database connection failed: " . mysqli_error());
			} 
		}

	public function query($fname, $lname,$uname, $mail, $pass){
		$conn = $this->connection;

		$check_user = "SELECT id FROM users WHERE e_mail = '$mail'";
		$qliquery = mysqli_query($conn, $check_user);
		$feedback = mysqli_num_rows($qliquery);

		if ($feedback == 0){

			$db_insert = "INSERT INTO users (first_name, last_name, user_name, e_mail, password) VALUES('$fname', '$lname', '$uname','$mail', '$pass')";

			$result = mysqli_query($conn, $db_insert);

			return $result;
		} else {
			return false;
		}
	}

	function login($email, $passwd){
		$conn = $this->connection;

		$check = mysqli_query($conn, "SELECT * FROM users WHERE e_mail = '$email' AND password = '$passwd'");

		$data = mysqli_fetch_array($check);
		$result = mysqli_num_rows($check);

		if ($result ==1 ){
			$_SESSION['login'] = true;
			$_SESSION['id'] = $data['id'];
			return true;
		} else {
			return false;
		}
	}

	public function fullname($id){
		$result = mysqli_query("SELECT * FROM subjects WHERE id = '$id'");
		$row = mysqli_fetch_array($result);
		echo $row['first_name'] . " " . $row['last_name'];
	}

	public function session(){
		if (isset($_SESSION['loging'])) {
			return $_SESSION['login'];
		}
	}

	public function logout(){
		$_SESSION['login'] = false;
		session_destroy();
	}

	public function close_connection(){
			if (isset($this->connection)) {
				mysqli_close($this->connection);
				unset($this->connection);
			}
		}

}

$user = new User();
$user->open_connection();



?>