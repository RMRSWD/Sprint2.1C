<?php
require_once("connect.php");

function getConnect(){
    $connexion=new PDO('mysql:host='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $connexion->query("SET NAMES UTF8");
    return $connexion;
}

function checkUser($login,$mdp){
    $connexion=getConnect();
    $requete="SELECT * FROM user WHERE id='$login' AND mdp='$mdp' ";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $check=$resultat->fetch();
    return $check;
}

function checkGrade($login){
    $connexion=getConnect();
    $requete="SELECT grade FROM user WHERE id='$login'";
    $resultat=$connexion->query($requete);
    return $resultat;
}

