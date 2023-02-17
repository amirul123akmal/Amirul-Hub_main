<link rel="stylesheet" type="text/css" href="css/login.css">

<?php 
	require 'header.php';
	require 'html/login.html';
	
	$conn = mysqli_connect("localhost", "cxuqpngk_amirul", "Wrl8021@", "cxuqpngk_main");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if($_POST["user"] == "")
			return ;
		else
			echo "string";
	}
?>