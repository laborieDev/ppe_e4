<?php
include("vues/v_sommaireC.php");
$action = $_REQUEST['action'];
switch($action){

    //Affiche les fiches en état VA
	case 'ValidFiche':{
        $LesVisiteur=$pdo->getVisiteurVa(); 
        $LesVisiteurR=$pdo->getVisiteurVa();
		include("vues/v_listeVisiteur-VA.php");
		break;
    }

    //Affiche les fiches en état VA dont le visiteur des fiches a été recherché
    case 'ValidFicheR':{
        $LesVisiteurR=$pdo->getVisiteurVa();
        $LesVisiteur=$pdo->getVisiteurVaRecherche($_POST['nom']);
		include("vues/v_listeVisiteur-VA.php");
		break;
    }

    //Affiche le détails d'une fiche VA
    case 'lesFiches':{
        $id = $_GET['id'];
        $LesFiches=$pdo->getFicheVA($id);
        $mois = $LesFiches['mois'];
        $montantValide = $LesFiches['montantValide'];
		$nbJustificatifs = $LesFiches['nbJustificatifs'];
		$dateModif =  $LesFiches['dateModif'];
        $dateModif =  dateAnglaisVersFrancais($dateModif);
        $prenom = $LesFiches['prenom'];
        $nom = $LesFiches['nom'];
        include("vues/v_rembourserFrais.php");
        break;
    }

    //Permet au visiteur de confirmer le remboursement 
    case 'Valider':{
        $id = $_GET['id'];
        $mois = $_GET['mois'];
        include("vues/v_rembourserFrais.php");
        break;
    }

    //Effectue le remboursement 
    case 'OK':{
        if(isset($_GET['yes'])){
            $Set = $pdo->setRembourserFiche($_GET["id"], $_GET["mois"]);
            echo "<script>alert('Votre demande a bien été pris en compte !');</script>";
        }
        else{
            echo "<script>alert('Votre demande a été annulé')</script>";  
        }  
        break;
    }
}
?>
