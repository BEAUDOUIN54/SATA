<?php

session_start();

// //	Si l'utilisateur n'est pas identifié
// if (!array_key_exists('identification', $_SESSION)) {
//     //	Redirection vers la page d'identification
//     header('Location: connexion.php');
//     exit;
// }

//	Récupération des articles de l'utilisateur
//require '../models/ads.php';
//$ads = getAdsByUserId($_SESSION['identification']);

require '../views/index.phtml';
