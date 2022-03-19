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
					<th> username</th>
					<th> firstname</th>
					<th> lastname</th>
					<th> password</th>
					<th> adresse</th>
					<th> tel</th>
				</tr>
			<?php
			$json=file_get_contents("http://localhost/nikeshope/view/exportjsonuser.php");
			$users=json_decode($json,true);
			  
			   
			if(isset($users)) {
			    foreach ($users as $u){
			    
			?>
			<tr>
			<td><?php echo $u['id']?></td>
			<td><?php echo $u['username'];?></td>
			<td><?php echo $u['firstname'];?></td>
			<td><?php echo $u['lastname'];?></td>
			<td><?php echo $u['password'];?></td>
			<td><?php echo $u['adresse'];?></td>
			<td><?php echo $u['tel'];?></td>
			</tr>

			<?php
			}}
			?>
			</table>
		</div>
	</body>