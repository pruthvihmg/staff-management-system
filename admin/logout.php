<?php
	session_start();
	if(isset($_SESSION['passworda'])){
		session_destroy();
		header("location:../index.html");
	}
	?>