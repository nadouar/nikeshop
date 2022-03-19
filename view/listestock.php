<?php 
include __DIR__ .'../header.php'; 
?>
<a href="teststock.php?action=add">Add</a>
<table border="1" width="750">

	<tr>
	<td>id</td>
	<td>Categorie</td>
	<td>Quantite</td>
	<td>Price</td>
	<td>update</td>
	<td>delete</td>
	</tr>
	<?php
		foreach($stocks as $stock){
	?>

	<tr>
	    <td><?php echo $stock->getAll('id'); ?></td>
	    <td><?php echo $stock->getAll('categorie'); ?></td>
	    <td><?php echo $stock->getAll('quantite'); ?></td>
	    <td><?php echo $stock->getAll('price'); ?></td>
	    <td><a href="teststock.php?action=prepare&id=<?php echo $stock->getAll('id'); ?>">update</a></td>
	    <td><a href="teststock.php?action=supprimer&id=<?php echo $stock->getAll('id'); ?>">delete</a></td>
	</tr>
	<?php
		}
	?>
</table>
<?php 
include __DIR__ .'../footer.php'; ?>