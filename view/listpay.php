<?php 
include __DIR__ .'../header.php'; 
?>
<div> 
		<a href= "testpay.php?action=add">add</a> 
		<table> 
			<tr> 
				<th> id</th> 
				<th> typepayement</th> 
				<th> montant</th>
				<th> autorisation</th> 
				<th> Update</th> 
			</tr> 
			<?php 
			foreach ($payms as $paym){ ?> 
			<tr> 
				<td><?php echo $paym->get('id');?></td> 
				<td><?php echo $paym->get('typepayement');?></td> 
				<td><?php echo $paym->get('montant');?></td> 
				<td><?php echo $paym->get('autorisation');?></td> 
				<td><a href="testpay.php?action=update&id=<?php echo $paym->get('id');?>">Update</a></td> 
			</tr> 
			<?php } ?> 
		</table> 
	</div>
<?php 
include __DIR__ .'../footer.php'; ?>