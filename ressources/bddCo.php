<?php 

class bddCo{

	public function __construct(){
		$this->bdd = new PDO('mysql:host=localhost;dbname=phptest;charset=utf8','root','');
	}

	function checkUser($username, $userpass){
		$req = "SELECT Username, Userpass FROM UserLogin WHERE Username = '".$username."' AND Userpass = '".$userpass."'";
         
        $check = $this->bdd->query($req)->rowCount();

	}

	function addUser($username, $userpass, $usermail){

		$req = 'INSERT INTO UserLogin(Username, Userpass, Usermail) VALUES("'.$username.'", "'.$userpass.'", "'.$usermail.'"';
		$this->bdd->exec($req);
	}
}

?>