<?php 
	/*class model{
	 public static$pdo; 
	 public static function Init(){
	  try{ 
	  	self::$pdo=new PDO("mysql:host=localhost:3306;dbname=projetsem2",'root','');
	  	self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  }
	  catch(PDOException$e){ 
	  	echo $e->getMessage();// affiche un message d'erreur 
	  die();//arrêt de taitement
	   } 
	  }
	}
  model::Init(); */


class Model{
	public static $con;
	
	public static function init(){
	try{
self::$con= new PDO("mysql:host=localhost:3306;dbname=projetsem2","root",""); 
    }catch(Exception $e){
	 return $e->getMessage();
	}
	}
}
Model::init();
?>