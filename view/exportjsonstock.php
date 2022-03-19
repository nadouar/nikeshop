<?php
	$connex=new PDO("mysql:host=localhost:3306;dbname=projetsem2;charset=utf8","root","");
	$resultat=$connex->query('SELECT id, quantite, categorie, price from product');
	$tab=$resultat->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($tab);
?>