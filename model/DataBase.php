<?php
class DataBase
{
    static private $connex;
    static public function init(){
		try{
        self::$connex=new PDO("mysql:host=localhost:3306;dbname=projetsem2","root","");
		}
		catch(PDOException $exception){
			echo $exception->getMessage();
			die();
		}
    }
    static public function query($rq, $class, $tab=array()){
		//Rq select
		if(count($tab)){			
			$stm=self::$connex->prepare($rq);
			$r= $stm->execute($tab);
			return $r->fetchall();
		}
		else{
			$r=self::$connex->query($rq);
			return $r->fetchall(PDO::FETCH_CLASS, $class);
		}
    }
    static public function find($rq, $tab){			
		$stm=self::$connex->prepare($rq);
		$r= $stm->execute($tab);
		if($r)
			return $stm->fetch();
		else
			return $r;
    }
    static public function execute ($rq,$tab){
		//Rq insert update et delete     
		
		try{
			$stm=self::$connex->prepare($rq);
			$r= $stm->execute($tab);
			return $r;
		}
		catch(Exception $exception){
			echo $exception->getMessage();
			return  $exception->getMessage();
		}
    }
}

DataBase::init();
?>