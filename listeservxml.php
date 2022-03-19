<?php
header('Access-Control-Allow-Origin: *');
$conex = new PDO('mysql:host=localhost:3306;dbname=projetsem2;charset=utf8','root','');
if(isset($_GET['Request'])){
	$xml = $_GET['Request'];
	$tab = new SimpleXMLElement($xml);
	$idcategorie = (string) $tab->idcategorie;
	$stm = $conex->query("SELECT `id` as id, `price` as price, `quantite`, concat('http://localhost/nikeshope/global/image/',image) as image , categorie  
FROM `product` where categorie=".$idcategorie);
}
else
		$stm = $conex->query("SELECT `id` as id,  `price` as price, `quantite`, concat('http://localhost/nikeshope/global/image/',image) as image ,categorie	  
FROM `product`");
	
	
$tab = $stm->fetchall(PDO::FETCH_ASSOC);
?>
<?xml version="1.0"?>
<Stock>
	<Products>
	<?php
	foreach($tab as $h){
	?>
			<Product id="<?=$h['id'];?>" quantite="<?=$h['quantite'];?>">
			<Categorie id="<?=$h['categorie'];?>"/>	
			<Price><![CDATA[<?=$h['price'];?>]]></Price>
			<Description type="media"><![CDATA[<?=$h['image'];?>]]></Description>

		</Product>
	<?php
	}?>
	</Products>
</Stock>