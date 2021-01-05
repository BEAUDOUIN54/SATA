<?php


session_start();

//	Si l'utilisateur n'est pas identifié
if (!array_key_exists('identification', $_SESSION)) {
    //	Redirection vers la page d'identification
    header('Location: home.php');
    exit;
}



//	Traitement du formulaire s'il a été soumis
if (!empty($_POST)) {

    //	Ajout de l'événement
    require '../models/user.php';

    //if ($_POST['password'] == $_POST['passwordconfirm']) {
        addEvent($_POST['date'], $_POST['start'], $_POST['title'], $_POST['comment']);
        //	Redirection vers la page d'accueil
        //header('Location: home.php');
  //  }
   // else {
   //     header('Location: signUp.php?error=passwordmatch&pseudo='. $_POST['pseudo'].'email='.$_POST['email']);
    //}
    header('Location: home.php');
   exit;
}
require '../views/RDV.phtml';


