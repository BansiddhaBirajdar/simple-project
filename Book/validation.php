<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'logindb');
	$q="SELECT * FROM user WHERE username='$username' && password='$password' ";
	$r=mysqli_query($con,$q);
	$num=mysqli_num_rows($r);
	if($num==1):
		$_SESSION['username']=$username;
		header('location:http://localhost/Book/home.php');
	else:
		header('location:http://localhost/Book/index.php');
	endif;

?>