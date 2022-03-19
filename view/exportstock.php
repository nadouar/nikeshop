<?xml version="1.0"?>
<?php
	header('content-type:text.xml');
?>
<Stock>
	<Stocks>
		<?php
			$connex=new PDO("mysql:host=localhost:3306;dbname=projetsem2;charset=utf8","root","");
			$resultat=$connex->query('SELECT id, quantite, categorie, price from product ');
			$stocks=$resultat->fetchAll();
			foreach ($stocks as $stock)	{
		?>
		<stock id="<?=$stock['id'];?>">
			<categorie><![CDATA[<?= $stock["categorie"];?>]]></categorie>
			<quantite><![CDATA[<?= $stock["quantite"];?>]]></quantite>
			<price><![CDATA[<?= $stock["price"];?>]]></price>
		</stock>
<?php
}
?>


	</Stocks>
	<stockclient>
		<stockclient id="<?=$stock['id'];?>"><?= $stock["categorie"];?></stockclient>
	</stockclient>
</Stock>