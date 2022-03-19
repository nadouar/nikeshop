<?php
	include_once 'C:\wamp65\www\nikeshope\view\header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/nikeshope/global/css/style.css">
	</head>
	<body>
		<form action="testuser.php?action=insert" method="POST">
			<br><br>
			<div class="loginbox">
				<img src="http://localhost/nikeshope/global/image/avatar.png" class="avatar">
				<!--<form action="indexcontroller.php" method="post" >-->
					<h1>Signup Here</h1>
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
					<!--<form action="/../testuser.php?action=insert" method="POST">-->
						<input type="submit" name="submit" value="signup">
					<!--</form>-->
					<a href="http://localhost/nikeshope/view/login.php">u already have an account ?</a>
					<!--</form>-->
			</div>
		</form>
	</body>
</html>
<?php
	include_once 'C:\wamp65\www\nikeshope\view\footer.php';
?>










<!--<div class="loginbox">
			<h1>Sign Up Here</h1>
			<form  method="POST">
				<input type="text" name="first-name" class="input-box" placeholder="First Name*">
				<input type="text" name="last-name" class="input-box" placeholder="Last Name*">
				<input type="email" name="email" class="input-box" placeholder="Email*">
				<input type="password" name="password" class="input-box" placeholder="Password*">
					<p>
						<span><input type="checkbox" name="checkrob"></span>			
						I'm not a robot.
					</p>
				<hr>
				<button type="submit" name="submit" class="submit">Sign Up</button>
			</form>	
		</div>-->