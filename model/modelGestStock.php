<?php
require_once __DIR__ .'/Model.php'; 
class modelGestStock{ 
	private $id; 
	private $quantite; 
	private $categorie; 
	private $price; 
	// un constructeur 
	public function __construct ($Tab=array()){ 
		if(isset($Tab['id'])) 
			$this->id =$Tab['id']; 
		if(isset($Tab['quantite'])) 
			$this->quantite =$Tab['quantite']; 
		if(isset($Tab['categorie'])) 
			$this->categorie =$Tab['categorie']; 
		if(isset($Tab['price'])) 
			$this->price =$Tab['price']; 
	}
	// un getter 
	public function getAll($Attr){ 
		return$this->$Attr;
	 } 
	public function set($Attr,$Value){ 
		$this->$Attr = $Value; 
	}
	static public function getAllstock(){ 
		$Rq='SELECT id, quantite, categorie, price from product'; 
		$rep=Model::$con->query($Rq);
		$rep->setFetchMode(PDO::FETCH_CLASS,'modelGestStock'); 
		$tabobj=$rep->fetchAll(); 
		return $tabobj; 
	}
	public function getStock(){ 
		$stm=Model::$con->prepare('SELECT id, quantite, categorie, price from product where id=:id'); 
		$rep=$stm->execute(array('id'=>$this->id)); 
		$stm->setFetchMode(PDO::FETCH_CLASS,'modelGestStock'); 
		$tab=$stm->fetch(); 
		return $tab; 
	}
	public function save(){ 
		try{
		$Rq='insert into product(quantite, categorie, price) values(:quantite, :categorie, :price)'; 
		$stm=Model::$con->prepare($Rq);
		$tab=array('quantite'=>$this->quantite, 'categorie'=>$this->categorie, 'price'=>$this->price); 
		$retour=$stm->execute($tab); 
		return $retour;
		}
		catch(Exception $e){ 
			var_dump($e->getMessage()); 
			return 0; 
		}
	}
	public function update(){ 
		try{ 
			$Rq='UPDATE product set quantite=:quantite, categorie=:categorie, price=:price where id=:id'; 
			$stm=Model::$con->prepare($Rq); 
			$tab=array('quantite'=>$this->quantite, 'categorie'=>$this->categorie, 'price'=>$this->price); 
			$retour=$stm->execute($tab); 
			return $retour; 
		} catch(Exception $e){ 
			var_dump($e->getMessage()); 
			return 0; 
		} 
	}
	public function delete(){ 
		try{ 
			$Rq='DELETE from product where id=:id'; 
			$stm=Model::$con->prepare($Rq); 
			$tab=array('id'=>$this->id); 
			$retour=$stm->execute($tab); 
			return$retour; 
		} catch(Exception $e){ 
			var_dump($e->getMessage()); 
			return 0; }
		}
}