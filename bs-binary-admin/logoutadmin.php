<?php
ob_start();
	session_start();
	session_destroy();
	setcookie("user_name","",time()-3600);
	setcookie("user_pass","",time()-3600);
	header("location:login_view.php");
	?>