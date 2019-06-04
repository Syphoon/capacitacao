<?php 


/**
 * STATUS MANEGER
 */
class user 
{

	public $email;
	public $password;
	public $username;
	public $img;

	function __construct($user,$con)
	{

		if (isset($user['cadastro'])):
	
			$this->email = $user['email'];
			$this->password = $user['password'];
			$this->username = $user['username'];
			$this->img = $user['image'];

		else:

			$sql = "SELECT * FROM user WHERE username = '" .$user['username']. "'" ;
			$sf = $con->query($sql);
			$res= mysqli_fetch_array($sf);

			$this->username = $user['username'];
			$this->email = $res['email'];
			$this->password = $res['password'];
			$this->img = $res['user_img'];


		endif;

	}

	public function insert_user($con)
	{

		$sql = "INSERT INTO user (username, email, password) VALUES(?,?,?)";
		$stmt = $con->prepare($sql);

		if(!$stmt){

			header("Location: ../index.php?insert=error");

		}
		else{

			$stmt->bind_param( "sss", $this->username, $this->email ,$this->password);
			$stmt->execute();
			$sql = "UPDATE user SET user_img = '$this->img' WHERE username = '" . $this->username ." ' ";
		    mysqli_query($con, $sql);
			header("Location: ../index.php?&insert=sucess");

		}

	}

	public function update_img($con, $new_img)
	{

		$sql = "UPDATE user SET user_img = '$new_img' WHERE username = '" . $this->username ." ' ";

		if(mysqli_query($con, $sql)):

			$sql = "SELECT * FROM user WHERE username = '" .$this->username. "'" ;
			$sf = $con->query($sql);
			$res= mysqli_fetch_array($sf);
			$this->img = $res['user_img'];
			$_SESSION['image'] = $this->img;

		else:

			echo "deu merda";

		endif;

	}

	public function remove_user($con)
	{

		$sql =  "DELETE FROM `user` WHERE `username` = '$this->username' ";
		
		if (mysqli_query($con, $sql)){
			header("Location: ../index.php?&remove=sucess");
		}else{
			header("Location: ../index.php?&remove=fail");
		}

	}

}

/**
 * CONNECTION
 */
class con
{
	
	public $con;
	public $host;
	public $dbusername;
	public $dbpassword;
	public $dbname;

	function __construct()
	{

		$this->host = "localhost";
		$this->dbusername = "root";
		$this->dbpassword = "";
		$this->dbname = "tecno_jr";

		// Create connection
		$this->con = new mysqli ($this->host, $this->dbusername, $this->dbpassword, $this->dbname);
		if(!$this->con){
		  die("Connection failed: ".mysqli_connect_error());
		}

	}

	public function login($user){

		$sql = "SELECT * FROM user WHERE password = ". $user['password']  . "AND username = " .$user['username']. "";
		mysqli_query($this->con, $sql);

		if($this->con->affected_rows){

			return true;

		}else{
			header("Location: ../pag/login.php?&login=fail");
		}

	}

	public function logout()
	{

		session_unset();
		session_destroy();

	}

}

?>