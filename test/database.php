<?php
 require_once("config.php");
	
class User{

	private $connection;

	public function open_connection(){
			$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
			if(!$this->connection){
				die("Database connection failed: " . mysqli_error());
			} 
		}

	public function query($user, $mail, $pass){
		$conn = $this->connection;

		$check_user = "SELECT id FROM subjects WHERE e_mail = '$mail'";

		$qliquery = mysqli_query($conn, $check_user);

		$feedback = mysqli_num_rows($qliquery);
		if ($feedback == 0){

		$db_insert = "INSERT INTO subjects (user_name, e_mail, password) VALUES('$user','$mail', '$pass')";

		$result = mysqli_query($conn, $db_insert);

		return $result;
		} else {
			return false;
		}

	}

	function login($email, $passwd){
		$pass = md5($pass);
		$check = mysqli_query("SELECT * FROM subjects where e_mail = '$email' and password = '$passwd'");

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
		echo $row['name'];
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