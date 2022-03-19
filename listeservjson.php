<?php
header('Access-Control-Allow-Origin: *');
$conex = new PDO('mysql:host=localhost:3306;dbname=projetsem2;charset=utf8','root','');
if(isset($_GET['Request'])){
	$json = $_GET['Request'];
	$tab = json_decode($json, true);
	$idcategorie= $tab['idcategorie'];
	$stm = $conex->query("SELECT `id` as id, `productname` as productname, `price` as price, `quantite`, concat('http://localhost/nikeshope/global/image/',image) as image , categorie   
FROM `product` where categorie=".$idcategorie);
}
else
		$stm = $conex->query("SELECT `id` as id, `productname` as productname,  `price` as price, `quantite`, concat('http://localhost/nikeshope/global/image/',image) as image ,categorie	  
FROM `product`");
	
$tab = $stm->fetchall(PDO::FETCH_ASSOC);
//var_dump($tab);
echo json_encode($tab); 
?>