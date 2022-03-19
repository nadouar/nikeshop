<?php
	include_once 'C:\wamp65\www\nikeshope\view\header.php';
?>
<?php
session_start();
if(isset($_POST['login'], $_POST['password'])){
	//verification login et mot de passe
	require_once 'DataBase.php';
	$DB = new DataBase();
	$rq = 'select nom, prenom from admin where login=:login and password=:password';
	$tab=array('login'=>$_POST['login'], 'password'=>$_POST['password']);
	
	$admin=$DB->find($rq, $tab);
	
	if($admin){
		$_SESSION['nom'] = $admin['nom'];
		$_SESSION['prenom'] = $admin['prenom'];
		header('location:index.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/nikeshope/global/css/style.css">
	</head>
	<body>
		<form action="teststock.php?action=save" method="POST">
			<br><br>
			<div class="loginbox">
				<img src="http://localhost/nikeshope/global/image/avatar.png" class="avatar">
				<form action="indexcontroller.php" method="post" >
					<h1>Login Here</h1>
					<p>user name</p>
						<input type="text" name="username">
					<p>Password</p>
						<input type="password" name="password">
					<form action="" method="POST">
						<input type="submit" name="submit" value="Login">
					</form>
					<a href="http://localhost/nikeshope/view/signup.php">Don't have an account ?</a>
					</form>
			</div>
		</form>
	</body>
</html>
<?php
	include_once 'C:\wamp65\www\nikeshope\view\footer.php';
?>