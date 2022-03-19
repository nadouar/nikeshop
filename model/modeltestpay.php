<?php
require_once __DIR__ .'/modeltest.php'; 
class modeLtestpay{ 
	private $id; 
	private $typepayement; 
	private $montant; 
	private $autorisation; 
	// un constructeur 
	public function __construct ($Tab=array()){ 
		if(isset($Tab['id'])) 
			$this->id =$Tab['id']; 
		if(isset($Tab['typepayement'])) 
			$this->typepayement =$Tab['typepayement']; 
		if(isset($Tab['montant'])) 
			$this->montant =$Tab['montant']; 
		if(isset($Tab['autorisation'])) 
			$this->autorisation =$Tab['autorisation'];
	}
	public function get($Attr){ 
		return $this->$Attr; 
	}
	// un setter 
	public function set($Attr,$Value){ 
		$this->$Attr = $Value; 
	} 
		static public function getAllpayement(){ 
		$Rq='select id, typepayement, montant, autorisation from payements'; 
		$rep=modeltest::$pdo->query($Rq);
		$rep->setFetchMode(PDO::FETCH_CLASS,'modeltestpay'); 
		$tab=$rep->fetchAll(); 

		return $tab; 
	}
	public function getpayement(){ 
		$stm=modeltest::$pdo->prepare('select id, typepayement, montant, autorisation from payements where id=:id'); 
		$rep=$stm->execute(array('id'=>$this->id)); 
		$stm->setFetchMode(PDO::FETCH_CLASS,'modeltestpay'); 
		$tab=$stm->fetch(); 
		return $tab; 
	}
	public function save(){ 
		try{
		$Rq='insert into payements(typepayement, montant, autorisation) values(:typepayement, :montant, :autorisation)'; 
		$stm=modeltest::$pdo->prepare($Rq);
		$Tab=array('typepayement'=>$this->typepayement, 'montant'=>$this->montant, 'autorisation'=>$this->autorisation); 
		$retour=$stm->execute($Tab); 
		return $retour;
		}
		catch(Exception $e){ 
			var_dump($e->getMessage()); 
			return 0; 
		}
	}

	}