<?php
require_once('controleur/controleur.php');
//require_once('controleur/controleur_agent.php');
//require_once('controleur/controleur_conseiller.php');
//require_once('controleur/controleur_directeur.php');

try{
    if(isset($_POST['connect'])){
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        CtlConnect($login, $mdp);
    }

    else {
        CtlAccueil();
      }
    
   


}
catch(Exception $e){
    $msg=$e->getMessage();
	ctrlErreur($msg);

}