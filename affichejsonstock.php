<?php
include_once 'C:\wamp65\www\nikeshope\view\header.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://localhost/nikeshope/global/css/style.css">
	</head>
	<body>
		<br><br><br> 
		<div class="center">
			<table width="650" style="border:2px solid #0B173B;" align="center">
				<tr>
					<th> id</th>
					<th> product name </th>
					<th> categorie </th>
					<th> quantite </th>
					<th> price </th>
				</tr>
		<?php
			$json=file_get_contents("http://localhost/nikeshope/view/exportjsonstock.php");
			$stocks=json_decode($json,true);
			  
			   
			if(isset($stocks)) {
			    foreach ($stocks as $u){  
		?>
		<tr>
			<td><?php echo $u['id']?></td>
			<td><?php echo $u['productname']?></td>
			<td><?php echo $u['categorie'];?></td>
			<td><?php echo $u['quantite'];?></td>
			<td><?php echo $u['price'];?></td>
		</tr>

		
		<?php
			}}
		?>
		</table>
		</div>
	</body>