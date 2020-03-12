<?php
include("vues/v_sommaireC.php");
$action = $_REQUEST['action'];
switch($action){
	case 'valideVisiteur':{
		$LesVisiteur=$pdo->visiteurs();
		include("vues/v_listeVisiteur.php");
		break;
	}
	case 'lesFiches':{
		$LesVisiteur=$pdo->visiteurs();

	}
}
?>
