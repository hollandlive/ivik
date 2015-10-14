<?php
/* I am working on it
*
*/
class User {
public $db;
public $firstname;
public $lastname;
public $email;
public $username;
public $password;
public $error = false;


public function __construct() {
		try {
			$this->db = new PDO("mysql:host=localhost;dbname=login", 'root', ''); 
			return $this->db;
			
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

public function register($firstname, $lastname, $email, $username, $password, $password2) {
		
		
		$this->email = $_POST['email'];
		$this->username = $_POST['username'];
		$this->password = $_POST['password'];
		$this->password = $_POST['password2'];
	}
public function getFirstName($firstname) {
	if(!empty($_POST)) {
			$this->firstname = trim($_POST['firstname']);
			return $this->firstname; 
		} else {

		}		
}

public function getLastName($lastname) {
	if(!empty($_POST)) {
	$this->lastname = trim($_POST['lastname']);
			return $this->lastname;		
		}
}

public function getEmail($email) {
	if(!empty($_POST)) {
	$this->email = trim($_POST['email']);
			return $this->email;
			} 
}

public function getPassword($password) {
	if(!empty($_POST)) {
	$this->password = trim($_POST['password']);
			return $this->password;		
		}
}

public function getUsername($username) {
	if(!empty($_POST)) {
	$this->username = trim($_POST['username']);
			return $this->username;		
		}
}

public function query()

}
$user = new User();
/*if(isset($_POST {echo $user->register($user->firstname)}; ?>*/

?>
