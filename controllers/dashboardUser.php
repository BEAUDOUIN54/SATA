<?php

session_start();

//	Si l'utilisateur n'est pas identifié
if (!array_key_exists('identification', $_SESSION)) {
    //	Redirection vers la page d'identification
    header('Location: connexion.php');
    exit;
}


require '../models/user.php';
$username =getUsername($_SESSION['identification']);

/*
//	Récupération des produits de l'utilisateur
require '../models/ads.php';
$ads=getAdsByUserId($_SESSION['identification']);
$ads=getAllAds($_SESSION['identification']);
*/

require '../views/dashboardUser.phtml';

