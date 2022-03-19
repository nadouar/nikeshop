<?php 
	$connex=new PDO("mysql:host=localhost:3306;dbname=projetsem2;charset=utf8","root","");
$resultat=$connex->query("SELECT id, username, firstname, lastname, password, adresse, tel from client");
$tab=$resultat->fetchAll(PDO::FETCH_ASSOC);
//foreach ($tab as &$u) {
	# code...
	//$u['image']='http://localhost/3emebis/VoyagesKH/images/'.$h['image'];

//}
	echo json_encode($tab);


?>