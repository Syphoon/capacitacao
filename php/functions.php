<?php
	
	require_once "class.php";

	if (isset($_POST["username"])):

		$img = NULL;

		if (isset($_FILES['image'])):
			
			$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			
		endif;

		$_POST['image'] = $img;
		$user = new user($_POST);
		$con = new con;
		$user->insert_user($con->con);

	endif;


 ?>