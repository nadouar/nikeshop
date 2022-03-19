<?php
require_once __DIR__ .'/../model/modelSignup.php';
    class controlleruser{

     public static function all(){
            $users=modelSignup::getAllUser();
            require_once __DIR__ ."/../view/signup.php";
        }

        public static function allxml(){
            $users=modelSignup::getAllUser();
            require_once __DIR__ ."/../view/exportuser.php";
        }

        public static function listeuser(){
            $users=modelSignup::getAllUser();
            require_once __DIR__ ."/../view/listeuser.php";
        }

		 public static function add(){
           
            require_once __DIR__ .'/../view/signup.php';
        }

		public static function insert(){
           $user=new modelSignup($_POST);
            $r=$user->save();
            self::listeuser();
        }

		public static function prepare(){
            $tab=array('id'=>$_GET['id']);
            $user= new modelSignup($tab);
            $user=$user->getUser();
             require_once __DIR__ ."/../view/login.php";
         }

        /* public static function prepare1(){
            $tab=array('id'=>$_GET['id']);
            $user= new modelSignup($tab);
            $user=$user->getUser();
             require_once __DIR__ ."/../view/homestock.php";
         }
*/
		 public static function modifier(){
            $tab=array('id'=>$_GET['id']);
            $user= new modelSignup($tab);
            $user=$user->update();
            self::listeuser();
         }

		 public static function supprimer(){
            
            $tab=array('id'=>$_GET['id']);
            $user= new modelSignup($tab);
             $user=$user->delete();
             self::listeuser();
         }
	}
     

?>