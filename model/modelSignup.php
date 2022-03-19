 <?php 
require_once __DIR__ .'/Model.php';
 class modelSignup{
  	private $id;
  	private $username;
  	private $firstname;
  	private $lastname;
  	private $tel;
  	private $password;
  	private $adresse;
 //un constructeur
  	public function __construct ($Tab=array()) {
	   if(isset($Tab['id']))
	    	$this->id =$Tab['id'];
	   if(isset($Tab['username'])) 
	   		$this->username =$Tab['username'];
	   if(isset($Tab['firstname'])) 
	   		$this->firstname =$Tab['firstname'];
	   if(isset($Tab['lastname']))
	    	$this->lastname =$Tab['lastname'];
	   if(isset($Tab['tel']))
	    	$this->tel =$Tab['tel'];
	   if(isset($Tab['adresse']))
	    	$this->adresse =$Tab['adresse'];
	    if(isset($Tab['password']))
	    	$this->password =$Tab['password'];
	} 	
	//un getter
	public function getAll($Attr){ 
		return$this->$Attr;
	 }
	//un setter
	public function set($Attr,$Value){ 
		$this->$Attr=$valeur; 
	}

    public function alldb(){
        //select sans where
        $rq ="SELECT id, username, firstname, lastname, password, adresse, tel from client";
        return DataBase::query($rq, 'Admin');
    }
	static public function getAllUser(){
		$Rq="SELECT id, username, firstname, lastname, password, adresse, tel from client"; 
		$Rep= Model::$con->query($Rq);
		$Rep->setFetchMode(con::FETCH_CLASS,'modelSignup');
		$tabobj=$Rep->fetchAll();
		return $tabobj;
	}
	public function getUser(){
		  $stm=Model::$con->prepare('SELECT id,username,firstname,lastname,password,adresse,tel from client where id=:id');
            $stm->execute(array('id'=>$this->id));
            $stm->setFetchMode(con::FETCH_CLASS,'modelSignup');
            $tab=$stm->fetch();
            return$tab;
	}
	public function save(){
		try{
                $Rq='INSERT INTO client(username,firstname,lastname,password,adresse,tel) VALUES(:username,:firstname,:lastname,:password,:adresse,:tel)';
                $stm=Model::$con->prepare($Rq);
                $tab=array('username'=>$this->username,'firstname'=>$this->firstname,'lastname'=>$this->lastname,'password'=>$this->password,'adresse'=>$this->adresse,'tel'=>$this->tel);
                $retour=$stm->execute($tab);
                return $retour;
            }catch(Exception $e){
                echo $e->getMessage();
                return 0;
            }
        }
         public  function update(){

            try{
            $Rq='UPDATE  client SET username=:username,firstname=:firstname,lastname=:lastname,password=:password,adresse=:adresse,tel=:tel WHERE id=:id';
            $stm=Model::$con->prepare($Rq);
            $tab=array('id'=>$this->id,'username'=>$this->username,'firstname'=>$this->firstname,'lastname'=>$this->lastname,'password'=>$this->password,'adresse'=>$this->adresse,'tel'=>$this->tel);
            $retour=$stm->execute($tab);
            return $retour;
        }catch(Exception $e){
            echo $e->getMessage();
            return 0;
        }
        }

        public  function delete(){

            try{
            $Rq='DELETE FROM client WHERE id=:id';
            $stm=Model::$con->prepare($Rq);
            $tab=array('id'=>$this->id);
            $retour=$stm->execute($tab);
            return $retour;
        }catch(Exception $e){
            echo $e->getMessage();
            return 0;
        }
        }
 }