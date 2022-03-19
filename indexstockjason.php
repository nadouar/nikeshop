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
          <a class=" active" href="indexstockjason.php">active</a>
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
    <table class="center" width="650" border="2px solid #0B173B;" align="center">

		<tr>
			<th class="col-4">product name </th>
			<th class="col-4"> categorie </th>
			<th class="col-4"> quantite </th>
			<th class="col-4"> price </th>
			<th class="col-4"> image </th>
		</tr>

		<?php
		if(isset($_GET['idcategorie']))
				$json = file_get_contents('http://localhost/nikeshope/listeservjson.php?Request={"idcategorie":"'.$_GET['idcategorie'].'"}');
			else
				$json = file_get_contents('http://localhost/nikeshope/listeservjson.php');
			
			$products = json_decode($json, true);
			foreach($products as $product){
		?>
		<tr>
			<td style="text-align:center"><?=$product['productname'];?></td>
			<td style="text-align:center"><?=$product['categorie'];?></td>
			<td style="text-align:center"><?=$product['quantite'];?></td>
			<td style="text-align:center"><?=$product['price'];?></td>
			<td style="text-align:center"><img width="100" src="<?=$product['image'];?>" /></td>
        </tr>
	<?php
	}?>
    </table>
</body>
</html>		