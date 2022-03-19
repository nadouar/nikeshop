<?php
require_once __DIR__ .'/../model/modelGestStock.php';
    class controllerstock{

     public static function all(){
            $stocks=modelGestStock::getAllStock();
            require_once __DIR__ ."/../view/homestock.php";
        }

        public static function allxml(){
            $stocks=modelGestStock::getAllStock();
            require_once __DIR__ ."/../view/exportstock.php";
        }

        public static function listestock(){
            $stocks=modelGestStock::getAllStock();
            require_once __DIR__ ."/../view/listestock.php";
        }

		 public static function add(){
           
            require_once __DIR__ .'/../view/homestock.php';
        }

		public static function insert(){
           $stock=new modelGestStock($_POST);
            $r=$stock->save();
            self::listestock();
        }

		public static function prepare(){
            $tab=array('id'=>$_GET['id']);
            $stock= new modelGestStock($tab);
            $stock=$stock->getStock();
             require_once __DIR__ ."/../view/admin.php";
         }

        /* public static function prepare1(){
            $tab=array('id'=>$_GET['id']);
            $stock= new modelGestStock($tab);
            $stock=$stock->getstock();
             require_once __DIR__ ."/../view/homestock.php";
         }
*/
		 public static function modifier(){
            $tab=array('id'=>$_GET['id']);
            $stock= new modelGestStock($tab);
            $stock=$stock->update();
            self::listestock();
         }

		 public static function supprimer(){
            
            $tab=array('id'=>$_GET['id']);
            $stock= new modelGestStock($tab);
             $stock=$stock->delete();
             self::listestock();
         }
	}
     

?>