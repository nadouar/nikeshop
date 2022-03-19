<?php 
class modeltest{ 
	public static $pdo;
	public static function Init(){ 
		try{
		self::$pdo=new PDO("mysql:host=localhost:3306;dbname=projetsem2",'root','');
		// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
		self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
		catch(PDOException $e){ 
		echo $e->getMessage();// affiche un message d'erreur 
		die();//arrêt de taitement 
		}
	} 
}
modeltest::Init();