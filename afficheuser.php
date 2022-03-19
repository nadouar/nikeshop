

<?php 
$XML=file_get_contents("http://localhost/nikeshope/view/exportuser.php");

$users=new SimpleXMLElement($XML);
?>

<?php

$connex= new PDO("mysql:host=localhost:3306;dbname=projetsem2;charset=utf8","root","");
if($connex)

 
$r=$connex->query("SELECT id, username, firstname, lastname, password, adresse, tel from client");
$users=$r->fetchAll();

  ?>

<table border="1" width="500">
					<tr>
					    <th>id</th>
						<th> username</th>
						<th> firstname</th>
						<th> lastname</th>
						<th> password</th>
						<th> adresse</th>
						<th> tel</th>
				    </tr>
</div>

    <?php
   
if(isset($users)) {
    foreach ($users as $u){
    ?>
<tr>
<td><?php echo $u['id'];?></td>
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