<?php


$lifetime = strtotime('+1 minutes', 0);

session_set_cookie_params($lifetime);

session_start();



//	Traitement du formulaire d'identification s'il a été soumis
if (!empty($_POST)) {

    require '../models/user.php';
    $utilisateur = getUserByEmail($_POST['username']);

    //	email et mdp à vérifier s'ils existent
    if ($utilisateur !== null and password_verify($_POST['password'], $utilisateur['hashedPassword'])) {


        //	Si l'identification est réussie…
        $_SESSION['identification'] = intval($utilisateur['id']);

        //	Redirection vers la page de tableau de bord
        header('Location: ../controllers/dashboardUser.php');
        exit;

    } else {
        //	Redirection vers la page de connexion suite à message d'erreur
        header('Location: ../controllers/signIn.php ?error=invalid');
        exit;
    }
}

if (array_key_exists('error', $_GET)) {

    $errors = ['invalid' => 'adresse électronique ou mdp incorrect'];
    $errorMessage = $errors[$_GET['error']];
}
require '../views/signIn.phtml';
