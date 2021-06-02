<?php

//	Traitement du formulaire d'inscription s'il a été soumis
if (!empty($_POST)) {

    //	Ajout de l'utilisateur
    require '../models/user.php';

    if ($_POST['password'] == $_POST['passwordconfirm']) {
        addUser($_POST['email'], $_POST['pseudo'], $_POST['password']);
        //	Redirection vers la page d'accueil
        header('Location: home.php');
    }
    else {
        header('Location: signUp.php?error=passwordmatch&pseudo='. $_POST['pseudo'],'email='.$_POST['email']);
    }
    exit;
}

//	Inclusion du HTML
require '../views/signUp.phtml';
