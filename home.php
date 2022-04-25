<?php 
	session_start();
	if ($_SESSION['status'] == false) {
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Welcome to Mav Phone Shop</h1>
	<h1>Hi <?php echo $_SESSION['username']; ?></h1>
	<form method="POST" action="">
		<button type="submit" name="logout">Logout</button>
	</form>
</body>
</html>

<?php
	if (isset($_POST['logout'])) {
		session_destroy();
		header("Location: login.php");
	}
?>