<?php 
require_once('modele/modele.php');
require_once('vue/vuep/vue.php');
require_once('controleur/controleur_agent.php');

//FONCTION AFFICHANT L'ACCUEIL DE CHAQUE INTERFACE

function CtlAccueil(){ 
    afficherAccueil();
}

//FONCTION POUR LA CONEXION AU SITE DE GESTION SLON LA CATEGORIE
function CtlConnect($login,$mdp){ 
    $check=checkUser($login,$mdp);
if (!empty($check)){
		$a=$check->grade;
		
        if($a=="Agent"){
            CtlAccueilAgent();
            
        }elseif ($a=="Conseiller") {
            CtlAcceuilConseillers();
            
//			code...
        }
        elseif($a=="Directeur"){
            CtlAccueilDirect();
        }
		

}
    
         
		else{

        throw new Exception("Login ou mot de passe incorrect");
		}



}
function CtlErreur($erreur){
    afficherErreur($erreur);

}