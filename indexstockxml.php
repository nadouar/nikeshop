<?php
	include_once 'C:\wamp65\www\nikeshope\view\header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/nikeshope/global/css/style.css">

</head>
<body>
     <ul class="nav">
        <li class="">
          <a class=" active" href="indexstockxml.php">active</a>
        </li>
        <li class="">
          <a class=" active" href="?idcategorie=1">shirt</a>
        </li>
        <li class="">
          <a class="" href="?idcategorie=2">short</a>
        </li>
        <li class="">
          <a class="" href="?idcategorie=3">shoes</a>
        </li>
      </ul>
    <table class="center">

		<tr>
			<th>categorie</th>
      <th>product name</th>
			<th>quantite</th>
			<th>price</th>
      <th>image</th>
		</tr>

	<?php
	if(isset($_GET['idcategorie']))
			$xml = file_get_contents('http://localhost/nikeshope/listeservxml.php?Request=<Request><idcategorie>'.$_GET['idcategorie'].'</idcategorie></Request>');
		else
			$xml = file_get_contents('http://localhost/nikeshope/listeservxml.php');
		
		$Stock = new SimpleXMLElement($xml);
		foreach($Stock->Products->Product as $u){
	?>
	<tr>  
      <!--<td><?=$p->categorie['id']?></td>  
      <td><?=$p['quantite '];?></td>        
      <td><?=$p->price;?></td>-->
      <td><?php echo $u['productname'];?></td>
      <td><?php echo $u['categorie'];?></td>
      <td><?php echo $u['quantite'];?></td>
      <td><?php echo $u['price'];?></td>
      <td><img width="100" src="<?=$u->Description;?>" /></td>

  </tr>
	<?php
	}?>
    </table>
</body>
</html>