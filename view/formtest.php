<?php
	include __DIR__ .'../header.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/nikeshope/global/css/style.css">
	</head>
	<body>
		<form action="testpay.php?action=save" method="POST">
			<br><br>
			<div class="loginbox">
				<img src="http://localhost/nikeshope/global/image/avatar.png" class="avatar">
				<form action="controllertest.php" method="post" >
					<p>typepayement</p>
						<input type="text" name="typepayement">
					<p>montant</p>
						<input type="text" name="montant">
					<p>autorisation</p>
						<input type="text" name="autorisation">
					<form action="testpay.php?action=save" method="POST">
						<a href="listpay.php">envoyer</a>
					</form>
					</form>
			</div>
		</form>
	</body>
</html>
<?php
	include __DIR__ .'../footer.php'; 
?>