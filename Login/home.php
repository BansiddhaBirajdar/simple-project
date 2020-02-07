<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>Hello  <?php echo $_SESSION['username']; ?></h2><br/>
	<button><a href="Logout.php">Logout</a></button>

</body>
</html>