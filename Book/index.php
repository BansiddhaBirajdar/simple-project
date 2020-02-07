<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<style>
    body {font-family: Arial, Helvetica, sans-serif;
  background-image: url('b.jpg');
  background-attachment: fixed;
  background-repeat: no-repeat,repeat;
  background-size: cover; 
}
.f{
	width: 400px;
	height: 270px;
	background-color: rgba(0,0,0,0.5);
	margin: 0 auto;
	margin-top: 100px;
	color: #AAFF00;
	padding-top: 10px;
	padding-left: 20px;
	border-radius: 15px;
	font-weight: bolder;
	box-shadow: inset -7px -7px rgba(0,0,0,0.5);
}
.f input[type="text"]{
	width: 200px;
	height: 35px;
	border:0; 
	border-radius: 5px;

}
.f input[type="password"]{
	width: 200px;
	height: 35px;
	border:0; 
	border-radius: 5px;

}
.f input[type="submit"]{
	width: 70px;
	height: 35px;
	border:0; 
	border-radius: 5px;
	background-color:#AAFF00; 
	font-weight: bolder;
}
</style>
</head>
<body>
	<div class="f">
	<h2 align="center">Login </h2>
	<form action="validation.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder=" username" /></td>
			
			</tr>
			<tr><td><br/><td></tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder=" password" /></td>
			</tr>
			<tr><td><br/><td></tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login" /></td>
			</tr>
		</table>
		
	</form>
</div>

</body>
</html>