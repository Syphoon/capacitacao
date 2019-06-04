<?php
	
	require_once "class.php";

	if (isset($_POST["cadastro"])):

		$img = NULL;

		if (isset($_FILES['image'])):
			
			$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			
		endif;

			$_POST['image'] = $img;
			$con = new con;
			$user = new user($_POST,$con->con);
			$user->insert_user($con->con);

	endif;


	if(isset($_POST['login'])):

		$con = new con;
		$user = new user($_POST,$con->con);

		if($con->login($_POST)):

			session_start();
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['image'] = $user->img;
			header("Location: ../index.php?&login=sucess");

		endif;

	endif;

 ?>