<?php
	include_once 'C:\wamp65\www\nikeshope\view\header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/nikeshope/global/css/style.css">
	</head>
	<body>
		<form action="testuser.php?action=save" method="POST">
			<br><br>
			<div class="loginbox">
				<img src="http://localhost/nikeshope/global/image/avatar.png" class="avatar">
					<h1>Signup Here</h1>
					<p>id</p>
						<input type="text" name="id">
					<p>First Name</p>
						<input type="text" name="firstname">
					<p>Last Name</p>
						<input type="text" name="lastname">
					<p>user name</p>
						<input type="text" name="username">
					<p>télephone</p>
						<input type="text" name="tel">
					<p>adresse</p>
						<input type="text" name="adresse">
					<p>Password</p>
						<input type="password" name="password">
					<form action="testuser.php?action=save" method="POST">
						<input type="submit" name="update" value="update">
					</form>
					<a href="http://localhost/nikeshope/view/login.php">u already have an account ?</a>
			</div>
		</form>
	</body>
</html>
<?php
	include_once 'C:\wamp65\www\nikeshope\view\footer.php';
?>