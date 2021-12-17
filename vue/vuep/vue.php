<?php 

function afficherAccueil(){
    $contenu ="";
    require_once("vue/gabarit/gabarit.php");
}
function afficherErreur($erreur) {
    $contenu='<p>'.$erreur.'</p>
              <p><label><a href="site.php">Revenir au site</a></label></p>';
    require_once("vue/gabarit/gabarit.php");
             
}