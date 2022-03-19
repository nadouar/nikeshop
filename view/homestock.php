<?php
	include_once 'C:\wamp65\www\nikeshope\view\header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/nikeshope/global/css/style.css">
	</head>
	<body>
		<form action="teststock.php?action=insert" method="POST">
			<br><br>
			<div class="loginbox">
					<h1>Add Products</h1>
					<p>Categorie</p>
						<input type="text" name="categorie">
					<p>Quantite</p>
						<input type="text" name="quantite">
					<p>Price</p>
						<input type="text" name="price">
						<input type="submit" name="save" value="save">
			</div>
		</form>
	</body>
</html>
<?php
	include_once 'C:\wamp65\www\nikeshope\view\footer.php';
?>