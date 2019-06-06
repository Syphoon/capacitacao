
<?php 
	
	session_start();
	
	if (isset($_FILES['update_image'])):
		

		if($_FILES['update_image']['size'] < 1048576 * 2):

			require_once "../php/class.php";
			$con = new con;
			$user = new user($_SESSION,$con->con);
			$new_img = addslashes(file_get_contents($_FILES['update_image']['tmp_name']));
			$user->update_img($con->con, $new_img);

		else:

			echo '<script>alert("Vai pegar um icone pelo amor de nosso storage.");</script>';

		endif;


	endif;


	if(!isset($_SESSION["username"])):
	
		header("Location: login.php?&logout=true");

	endif;


?>

<div id="modal1" class="modal"  style="background: rgba(255,255,255,.1); border: solid white 1px;">
	<div class="modal-content">
		<div class="row side-option">
		    <form method="post" enctype="multipart/form-data">
		        <div class="col s12 file-field input-field">
		          <div class="btn" style="">
		            <span>Profile Image</span>
		            <input name="update_image" type="file">
		          </div>
		          <div class="file-path-wrapper">
		            <input class="file-path validate" type="text">
		          </div>
		        </div>
		        <button class="col s2 btn" style="margin-left: 12px; " type="submit" name="update"><i class="fas fa-paper-plane "></i></button>
		    </form>
		</div>
	</div>
	<div class="modal-footer">
	  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
	</div>
</div>


