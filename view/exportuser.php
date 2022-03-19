<?xml version="1.0"?>
<?php
	header('content-type:text.xml');
?>
<User>
	<Users>
		<?php
$connex=new PDO("mysql:host=localhost:3306;dbname=projetsem2;charset=utf8","root","");
$resultat=$connex->query("SELECT id, username, firstname, lastname, password, adresse, tel from client");
$users=$resultat->fetchAll();
foreach ($users as $user)	{
	?>
		<user id="<?=$user['id'];?>">
<username><![CDATA[<?= $user["username"];?>]]></username>
<firstname><![CDATA[<?= $user["firstname"];?>]]></firstname>
<lastname><![CDATA[<?= $user["lastname"];?>]]></lastname>
<password><![CDATA[<?= $user["password"];?>]]></password>
<adresse><![CDATA[<?= $user["adresse"];?>]]></adresse>
<tel><![CDATA[?= $user["tel"];?]]></tel>
</user>
<?php
}
?>


	</Users>
	<Userclient>
		<Userclient id="<?=$user['id'];?>"><?= $user["username"];?></Userclient>
	</Userclient>
</User>
