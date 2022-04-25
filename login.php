<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div style="text-align: center;color: yellowgreen;">
		<h1>Welcome to Mav Phones</h1>
		<form method="POST" action="">
			<div>
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<br>
			<div>
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div>
				<br>
				<button type="submit">LOGIN</button>
			</div>
		</form>
	</div>
</body>
</html>

<?php
	session_start();
	$_SESSION['status'] = false;
	$_SESSION['username'] ="";

	include('include/conn.php');

	if(isset($_POST['username'])) {
		$user = $_POST['username'];
		$pass = sha1($_POST['password']);

		$sql = "SELECT * FROM user WHERE username = '$user' and password='$pass'";
		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			echo "<br><center>Successfully Login</center>";
			$_SESSION['status'] = true;
			$_SESSION['username'] = $row['username'];
			header("Location: home.php");
			exit();
		}else{
			echo "<br><center>Incorrect username and password</center>";
		}
	}
?>