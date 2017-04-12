<?php 
include_once('/ressources/bddCo.php');

$bdd = new bddCo();
$type = '';

if(!empty($_REQUEST['act'])){
	$type = $_REQUEST['act'];
 }


switch($type){
	case 'login':		
		$result = $bdd->checkUser($_REQUEST['username'], $_REQUEST['userpass']);
		break;
	
	case 'create':
		$bdd->addUser($_REQUEST['addname'], $_REQUEST['addpass'], $_REQUEST['addmail']);
		break;

	default:
		break;
}

include '/ressources/template/index.html';
?>