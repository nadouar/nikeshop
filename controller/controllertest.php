<?php 
require_once __DIR__ .'/../model/modeltestpay.php';
// chargement du modèle 
class controllertest{ 
public static function liste(){ 
$payms=modeltestpay::getAllpayement();//appel au modèle pour gerer la BD 
require_once __DIR__ .'/../view/listpay.php';
//"redirige" vers la vue
 } 
public static function add(){ 
	require_once __DIR__ .'/../view/formpay.php';
//"redirige" vers la vue 
} 
public static function save(){ 
	$payms=new modeltestpay($_POST); 
	$retour=$payms->save(); 
	self::liste(); 
}}