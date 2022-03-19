<?php 
include __DIR__ .'../header.php'; 
?>
<a href="testuser.php?action=add">Add</a>
<table border="1" width="750">

	<tr>
	<td>id</td>
	<td>first name</td>
	<td>last name</td>
	<td>user name</td>
	<td>tel</td>
	<td>adresse</td>
	<td>password</td>
	<td>update</td>
	<td>delete</td>
	</tr>
	<?php
		foreach($users as $user){
	?>

	<tr>
	    <td><?php echo $user->getAll('id'); ?></td>
	    <td><?php echo $user->getAll('firstname'); ?></td>
	    <td><?php echo $user->getAll('lastname'); ?></td>
	    <td><?php echo $user->getAll('username'); ?></td>
		<td><?php echo $user->getAll('tel'); ?></td>
		<td><?php echo $user->getAll('adresse'); ?></td>
		<td><?php echo $user->getAll('password'); ?></td>
	    <td><a href="testuser.php?action=prepare&id=<?php echo $user->getAll('id'); ?>">update</a></td>
	    <td><a href="testuser.php?action=supprimer&id=<?php echo $user->getAll('id'); ?>">delete</a></td>
	</tr>
	<?php
		}
	?>
</table>
<?php 
include __DIR__ .'../footer.php'; ?>