<?php
	$XML=file_get_contents("http://localhost/nikeshope/view/exportstock.php");

	$stocks=new SimpleXMLElement($XML);
	?>

	<?php

	$connex= new PDO("mysql:host=localhost:3306;dbname=projetsem2;charset=utf8","root","");
	if($connex)
	$r=$connex->query('SELECT id, quantite, categorie, price from product');
	$stocks=$r->fetchAll();

?>
 
<table border="1" width="500">
					<tr>
					    <th>id</th>
						<th> categorie</th>
						<th> quantite</th>
						<th> price</th>
				    </tr>
<?php
	   
	if(isset($stocks)) {
	    foreach ($stocks as $u){
?>
<tr>
	<td><?php echo $u['id'];?></td>
	<td><?php echo $u['categorie'];?></td>
	<td><?php echo $u['quantite'];?></td>
	<td><?php echo $u['price'];?></td>
</tr>
<?php
	}}
?>
</table>